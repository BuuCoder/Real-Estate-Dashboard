<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    // GET /api/posts
    public function index(Request $request)
    {
        try {
            $query = Post::with(['author', 'tags', 'postTypes']);
            if ($search = $request->input('search')) {
                $query->where('title', 'like', "%$search%");
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
            $post = Post::with(['author', 'tags', 'postTypes'])->where('slug', $slug)->first();
            if (!$post) {
                return response()->json([
                    'success' => false,
                    'message' => 'Post not found.'
                ], 404);
            }
            return response()->json([
                'success' => true,
                'data' => $post
            ]);
        } catch (\Exception $e) {
            Log::error('Error fetching post detail: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Error fetching post detail.'
            ], 500);
        }
    }
}
