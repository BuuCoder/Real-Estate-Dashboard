<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostType;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    const STATUS = [
        'draft' => 'Draft',
        'pending' => 'Pending',
        'published' => 'Published',
        'archived' => 'Archived',
        'rejected' => 'Rejected',
    ];
    // CRUD cho Post
    public function index(Request $request)
    {
        try {
            $page = $request->input('page', 1);
            if (!is_numeric($page) || $page < 1) {
                return redirect()->route('posts.index', ['page' => 1]);
            }
            $query = Post::with(['author', 'tags', 'postTypes']);
            if ($search = $request->input('search')) {
                $query->where('title', 'like', "%$search%");
            }
            $posts = $query->paginate(10);
            if ($page > $posts->lastPage()) {
                return redirect()->route('posts.index', ['page' => 1]);
            }
            $statuses = self::STATUS;
            return view('posts.index', compact('posts', 'statuses'));
        } catch (\Exception $e) {
            Log::error('Đã xảy ra lỗi khi lấy danh sách bài viết: ' . $e->getMessage());
            return back()->withErrors('Đã xảy ra lỗi khi lấy danh sách bài viết.');
        }
    }

    public function create()
    {
        try {
            $tags = Tag::all();
            $postTypes = PostType::all();
            $statuses = self::STATUS;
            return view('posts.create', compact('tags', 'postTypes', 'statuses'));
        } catch (\Exception $e) {
            Log::error('Đã xảy ra lỗi khi tạo bài viết: ' . $e->getMessage());
            return back()->withErrors('Đã xảy ra lỗi khi tạo bài viết.');
        }
    }

    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'status' => 'required',
                'title' => 'required',
                'slug' => 'nullable',
                'summary' => 'nullable',
                'content' => 'required',
                'content_fmt' => 'nullable',
                'cover_image_url' => 'nullable',
                'reading_minutes' => 'nullable|integer',
                'locale' => 'nullable',
                'published_at' => 'nullable|date',
                'canonical_url' => 'nullable',
                'meta_title' => 'nullable',
                'meta_description' => 'nullable',
                'meta_keywords' => 'nullable',
                'og_title' => 'nullable',
                'og_description' => 'nullable',
                'og_image' => 'nullable',
                'twitter_card' => 'nullable',
                'robots_index' => 'nullable|boolean',
                'robots_follow' => 'nullable|boolean',
                'robots_advanced' => 'nullable',
                'schema_type' => 'nullable',
                'schema_json' => 'nullable|string',
                'hreflangs' => 'nullable|string',
                'breadcrumbs' => 'nullable|string',
            ], [
                'status.required' => 'Trạng thái là bắt buộc.',
                'title.required' => 'Tiêu đề là bắt buộc.',
                'content.required' => 'Nội dung là bắt buộc.',
                'reading_minutes.integer' => 'Số phút đọc phải là số nguyên.',
                'published_at.date' => 'Ngày xuất bản không hợp lệ.',
                'schema_json.string' => 'Schema JSON phải là chuỗi.',
                'hreflangs.string' => 'Hreflangs phải là chuỗi.',
                'breadcrumbs.string' => 'Breadcrumbs phải là chuỗi.',
                'robots_index.boolean' => 'Giá trị robots index phải là true hoặc false.',
                'robots_follow.boolean' => 'Giá trị robots follow phải là true hoặc false.',
            ]);
            $data['author_id'] = 1;
            $post = Post::create($data);
            $post->tags()->sync($request->input('tags', []));
            $post->postTypes()->sync($request->input('post_types', []));
            return redirect()->route('posts.index');
        } catch (\Exception $e) {
            Log::error('Đã xảy ra lỗi khi lưu bài viết: ' . $e->getMessage());
            return back()->withErrors('Đã xảy ra lỗi khi lưu bài viết.');
        }
    }

    public function show(Post $post)
    {
        try {
            $post->load(['author', 'tags', 'postTypes']);
            $statuses = self::STATUS;
            return view('posts.show', compact('post', 'statuses'));
        } catch (\Exception $e) {
            Log::error('Đã xảy ra lỗi khi xem bài viết: ' . $e->getMessage());
            return back()->withErrors('Đã xảy ra lỗi khi xem bài viết.');
        }
    }

    public function edit(Post $post)
    {
        try {
            $tags = Tag::all();
            $postTypes = PostType::all();
            $statuses = self::STATUS;
            return view('posts.edit', compact('post', 'tags', 'postTypes', 'statuses'));
        } catch (\Exception $e) {
            Log::error('Đã xảy ra lỗi khi sửa bài viết: ' . $e->getMessage());
            return back()->withErrors('Đã xảy ra lỗi khi sửa bài viết.');
        }
    }

    public function update(Request $request, Post $post)
    {
        try {
            $data = $request->validate([
                'status' => 'required',
                'title' => 'required',
                'slug' => 'nullable',
                'summary' => 'nullable',
                'content' => 'required',
                'content_fmt' => 'nullable',
                'cover_image_url' => 'nullable',
                'reading_minutes' => 'nullable|integer',
                'locale' => 'nullable',
                'published_at' => 'nullable|date',
                'canonical_url' => 'nullable',
                'meta_title' => 'nullable',
                'meta_description' => 'nullable',
                'meta_keywords' => 'nullable',
                'og_title' => 'nullable',
                'og_description' => 'nullable',
                'og_image' => 'nullable',
                'twitter_card' => 'nullable',
                'robots_index' => 'nullable|boolean',
                'robots_follow' => 'nullable|boolean',
                'robots_advanced' => 'nullable',
                'schema_type' => 'nullable',
                'schema_json' => 'nullable|string',
                'hreflangs' => 'nullable|string',
                'breadcrumbs' => 'nullable|string',
            ], [
                'status.required' => 'Trạng thái là bắt buộc.',
                'title.required' => 'Tiêu đề là bắt buộc.',
                'content.required' => 'Nội dung là bắt buộc.',
                'reading_minutes.integer' => 'Số phút đọc phải là số nguyên.',
                'published_at.date' => 'Ngày xuất bản không hợp lệ.',
                'schema_json.string' => 'Schema JSON phải là chuỗi.',
                'hreflangs.string' => 'Hreflangs phải là chuỗi.',
                'breadcrumbs.string' => 'Breadcrumbs phải là chuỗi.',
                'robots_index.boolean' => 'Giá trị robots index phải là true hoặc false.',
                'robots_follow.boolean' => 'Giá trị robots follow phải là true hoặc false.',
            ]);
            $data['author_id'] = 1;
            $post->update($data);
            $post->tags()->sync($request->input('tags', []));
            $post->postTypes()->sync($request->input('post_types', []));
            return redirect()->route('posts.index');
        } catch (\Exception $e) {
            Log::error('Đã xảy ra lỗi khi cập nhật bài viết: ' . $e->getMessage());
            return back()->withErrors('Đã xảy ra lỗi khi cập nhật bài viết.');
        }
    }

    public function destroy(Post $post)
    {
        try {
            $post->delete();
            return redirect()->route('posts.index');
        } catch (\Exception $e) {
            Log::error('Đã xảy ra lỗi khi xóa bài viết: ' . $e->getMessage());
            return back()->withErrors('Đã xảy ra lỗi khi xóa bài viết.');
        }
    }

    // CRUD cho PostType
    public function postTypesIndex(Request $request)
    {
        try {
            $page = $request->input('page', 1);
            if (!is_numeric($page) || $page < 1) {
                return redirect()->route('post_types.index', ['page' => 1]);
            }
            $query = PostType::query();
            if ($search = $request->input('search')) {
                $query->where('name', 'like', "%$search%");
            }
            $postTypes = $query->orderBy('id', 'desc')->paginate(20);
            if ($page > $postTypes->lastPage()) {
                return redirect()->route('post_types.index', ['page' => 1]);
            }
            return view('post_types.index', compact('postTypes'));
        } catch (\Exception $e) {
            Log::error('Đã xảy ra lỗi khi lấy danh sách loại bài viết: ' . $e->getMessage());
            return back()->withErrors('Đã xảy ra lỗi khi lấy danh sách loại bài viết.');
        }
    }

    public function postTypesStore(Request $request)
    {
        try {
            $data = $request->validate([
                'code' => 'required|unique:post_types',
                'name' => 'required',
            ], [
                'code.required' => 'Mã loại bài viết là bắt buộc.',
                'code.unique' => 'Mã loại bài viết đã tồn tại.',
                'name.required' => 'Tên loại bài viết là bắt buộc.',
            ]);
            PostType::create($data);
            return back();
        } catch (\Exception $e) {
            Log::error('Đã xảy ra lỗi khi thêm loại bài viết: ' . $e->getMessage());
            return back()->withErrors('Đã xảy ra lỗi khi thêm loại bài viết.');
        }
    }

    public function postTypesUpdate(Request $request, PostType $postType)
    {
        try {
            $data = $request->validate([
                'code' => 'required',
                'name' => 'required',
            ], [
                'code.required' => 'Mã loại bài viết là bắt buộc.',
                'name.required' => 'Tên loại bài viết là bắt buộc.',
            ]);
            $postType->update($data);
            return back();
        } catch (\Exception $e) {
            Log::error('Đã xảy ra lỗi khi cập nhật loại bài viết: ' . $e->getMessage());
            return back()->withErrors('Đã xảy ra lỗi khi cập nhật loại bài viết.');
        }
    }

    public function postTypesDestroy(PostType $postType)
    {
        try {
            $postType->delete();
            return back();
        } catch (\Exception $e) {
            Log::error('Đã xảy ra lỗi khi xóa loại bài viết: ' . $e->getMessage());
            return back()->withErrors('Đã xảy ra lỗi khi xóa loại bài viết.');
        }
    }

    // CRUD cho Tag
    public function tagsIndex(Request $request)
    {
        try {
            $page = $request->input('page', 1);
            if (!is_numeric($page) || $page < 1) {
                return redirect()->route('tags.index', ['page' => 1]);
            }
            $query = Tag::orderBy('id', 'desc');
            if ($search = $request->input('search')) {
                $query->where('name', 'like', "%$search%");
            }
            $tags = $query->paginate(20);
            if ($page > $tags->lastPage()) {
                return redirect()->route('tags.index', ['page' => 1]);
            }
            return view('tags.index', compact('tags'));
        } catch (\Exception $e) {
            Log::error('Đã xảy ra lỗi khi lấy danh sách tag: ' . $e->getMessage());
            return back()->withErrors('Đã xảy ra lỗi khi lấy danh sách tag.');
        }
    }

    public function tagsStore(Request $request)
    {
        try {
            $data = $request->validate([
                'code' => 'required|unique:tags',
                'name' => 'required',
            ], [
                'code.required' => 'Mã tag là bắt buộc.',
                'code.unique' => 'Mã tag đã tồn tại.',
                'name.required' => 'Tên tag là bắt buộc.',
            ]);
            Tag::create($data);
            return back();
        } catch (\Exception $e) {
            Log::error('Đã xảy ra lỗi khi thêm tag: ' . $e->getMessage());
            return back()->withErrors('Đã xảy ra lỗi khi thêm tag.');
        }
    }

    public function tagsUpdate(Request $request, Tag $tag)
    {
        try {
            $data = $request->validate([
                'code' => 'required',
                'name' => 'required',
            ], [
                'code.required' => 'Mã tag là bắt buộc.',
                'name.required' => 'Tên tag là bắt buộc.',
            ]);
            $tag->update($data);
            return back();
        } catch (\Exception $e) {
            Log::error('Đã xảy ra lỗi khi cập nhật tag: ' . $e->getMessage());
            return back()->withErrors('Đã xảy ra lỗi khi cập nhật tag.');
        }
    }

    public function tagsDestroy(Tag $tag)
    {
        try {
            $tag->delete();
            return back();
        } catch (\Exception $e) {
            Log::error('Đã xảy ra lỗi khi xóa tag: ' . $e->getMessage());
            return back()->withErrors('Đã xảy ra lỗi khi xóa tag.');
        }
    }
}
