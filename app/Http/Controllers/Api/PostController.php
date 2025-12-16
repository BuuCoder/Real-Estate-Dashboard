<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostType;
use App\Models\Tag;
use App\Services\PostShareService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    // GET /api/posts
    public function index(Request $request)
    {
        try {
            $query = Post::query()->published()->with(['author', 'tags', 'postTypes']);
            if ($search = $request->input('search')) {
                $query->where('title', 'like', "%$search%");
            }

            $types = $request->input('types');
            $tags = $request->input('tags');

            if ($types && is_array($types)) {
                $query->whereHas('postTypes', function ($q) use ($types) {
                    $q->whereIn('id', $types);
                });
            }

            if ($tags && is_array($tags)) {
                $query->whereHas('tags', function ($q) use ($tags) {
                    $q->whereIn('id', $tags);
                });
            }
            
            $posts = $query->paginate(10);
            return response()->json([
                'success' => true,
                'data' => $posts
            ]);
        } catch (\Exception $e) {
            Log::error('Error fetching post list: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error fetching post list.'
            ], 500);
        }
    }

    // GET /api/posts/{slug}
    public function show($slug)
    {
        try {
            $post = Post::query()->published()->with(['author', 'tags', 'postTypes'])->where('slug', $slug)->first();
            if (!$post) {
                return response()->json([
                    'success' => false,
                    'message' => 'Post not found.'
                ], 404);
            }

            // Lấy các bài viết liên quan: cùng postTypes, mới nhất, loại trừ bài hiện tại
            $postTypeIds = $post->postTypes->pluck('id')->toArray();
            $relative = collect();

            if (!empty($postTypeIds)) {
                $relative = Post::query()
                    ->published()
                    ->with(['author', 'tags', 'postTypes'])
                    ->where('id', '!=', $post->id)
                    ->whereHas('postTypes', function ($q) use ($postTypeIds) {
                        $q->whereIn('post_types.id', $postTypeIds);
                    })
                    ->orderBy('published_at', 'desc')
                    ->limit(5)
                    ->get();
            }

            // Nếu không đủ 5 bài, bổ sung thêm các bài mới nhất khác
            if ($relative->count() < 5) {
                $excludeIds = $relative->pluck('id')->push($post->id)->toArray();
                $additional = Post::query()
                    ->published()
                    ->with(['author', 'tags', 'postTypes'])
                    ->whereNotIn('id', $excludeIds)
                    ->orderBy('published_at', 'desc')
                    ->limit(5 - $relative->count())
                    ->get();
                $relative = $relative->concat($additional);
            }

            return response()->json([
                'success' => true,
                'data' => $post,
                'relative' => $relative
            ]);
        } catch (\Exception $e) {
            Log::error('Error fetching post detail: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error fetching post detail.'
            ], 500);
        }
    }

    public function meta(){
        $tags = Tag::all();
        $postTypes = PostType::all();
        return response()->json([
            'tags' => $tags,
            'post_types' => $postTypes
        ]);
    }

    /**
     * GET /api/posts/{slug}/share
     * Lấy nội dung để share lên Facebook/Zalo
     */
    public function share($slug, PostShareService $shareService)
    {
        try {
            $post = Post::query()
                ->published()
                ->with(['author', 'tags', 'postTypes'])
                ->where('slug', $slug)
                ->first();

            if (!$post) {
                return response()->json([
                    'success' => false,
                    'message' => 'Post not found.'
                ], 404);
            }

            $shareData = $shareService->generateShareContent($post);

            return response()->json([
                'success' => true,
                'data' => $shareData
            ]);
        } catch (\Exception $e) {
            Log::error('Error generating share content: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error generating share content.'
            ], 500);
        }
    }
}
