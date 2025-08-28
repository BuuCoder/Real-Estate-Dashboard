@extends('dashboard.layout')

@section('title', 'Chỉnh sửa bài viết')

@section('content')
<div class="flex justify-center py-2">
    <form action="{{ route('posts.update', $post) }}" method="POST" class="space-y-6 w-full bg-white rounded-3xl shadow-panel p-8" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h2 class="text-xl md:text-2xl font-extrabold mb-2">Chỉnh sửa bài viết</h2>
        @if ($errors->any())
            <div class="mb-4 rounded-lg bg-red-100 px-4 py-3 text-red-700 text-xs md:text-md font-semibold border border-red-300">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
            <label class="block text-sm font-medium mb-1">Trạng thái</label>
            <select name="status" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400" required>
            @foreach ($statuses as $key => $label)
                @php
                $viLabel = [
                    'draft' => 'Nháp',
                    'published' => 'Đã xuất bản',
                    'pending' => 'Chờ duyệt',
                    'archived' => 'Lưu trữ',
                    'rejected' => 'Từ chối',
                ][$key] ?? $label;
                $selected = old('status', $post->status) == $key ? 'selected' : '';
                @endphp
                <option value="{{ $key }}" {{ $selected }}>{{ $viLabel }}</option>
            @endforeach
            </select>
            @error('status')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Tiêu đề</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400" required>
            @error('title')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Slug</label>
            <div class="flex gap-2">
                <input type="text" name="slug" id="slug" value="{{ old('slug', $post->slug) }}" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                <button type="button" onclick="generateSlug()" class="min-w-[150px] rounded-xl bg-brand-100 text-brand-700 px-3 py-2 text-xs font-semibold hover:bg-brand-200">Tạo tự động</button>
            </div>
            @error('slug')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Tóm tắt</label>
            <textarea name="summary" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">{{ old('summary', $post->summary) }}</textarea>
            @error('summary')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Nội dung</label>
            <textarea name="content" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400" required>{{ old('content', $post->content) }}</textarea>
            @error('content')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Định dạng nội dung</label>
            <input type="text" name="content_fmt" value="{{ old('content_fmt', $post->content_fmt) }}" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
            @error('content_fmt')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Ảnh cover</label>
            <input type="text" name="cover_image_url" id="cover_image_url" value="{{ old('cover_image_url', $post->cover_image_url) }}" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400" oninput="document.getElementById('cover_image_preview').src = this.value">
            @error('cover_image_url')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
            <div class="mt-2">
                <img id="cover_image_preview" src="{{ old('cover_image_url', $post->cover_image_url) }}" alt="Preview" class="max-h-40 rounded-xl border border-gray-200" style="display: {{ old('cover_image_url', $post->cover_image_url) ? 'block' : 'none' }};">
            </div>
        </div>
        <script>
            document.getElementById('cover_image_url').addEventListener('input', function() {
                var img = document.getElementById('cover_image_preview');
                img.src = this.value;
                img.style.display = this.value ? 'block' : 'none';
            });
        </script>
        <div>
            <label class="block text-sm font-medium mb-1">Số phút đọc</label>
            <input type="number" name="reading_minutes" value="{{ old('reading_minutes', $post->reading_minutes) }}" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
            @error('reading_minutes')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Ngôn ngữ</label>
            <select name="locale" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                @php
                    $locales = ['vi' => 'Tiếng Việt', 'en' => 'English'];
                    $currentLocale = old('locale', $post->locale);
                @endphp
                @foreach($locales as $key => $label)
                    <option value="{{ $key }}" {{ $currentLocale == $key ? 'selected' : '' }}>{{ $label }}</option>
                @endforeach
                @if($currentLocale && !array_key_exists($currentLocale, $locales))
                    <option value="{{ $currentLocale }}" selected>{{ $currentLocale }}</option>
                @endif
            </select>
            @error('locale')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Ngày đăng</label>
            <input type="date" name="published_at" value="{{ old('published_at', $post->published_at ? $post->published_at->format('Y-m-d') : '') }}" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
            @error('published_at')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Canonical URL</label>
            <input type="text" name="canonical_url" value="{{ old('canonical_url', $post->canonical_url) }}" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
            @error('canonical_url')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Meta title</label>
            <div class="flex gap-2">
                <input type="text" name="meta_title" id="meta_title" value="{{ old('meta_title', $post->meta_title) }}" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                <button type="button" onclick="generateMetaTitle()" class="min-w-[150px] rounded-xl bg-brand-100 text-brand-700 px-3 py-2 text-xs font-semibold hover:bg-brand-200">Tạo tự động</button>
            </div>
            @error('meta_title')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Meta description</label>
            <div class="flex gap-2">
                <input type="text" name="meta_description" id="meta_description" value="{{ old('meta_description', $post->meta_description) }}" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                <button type="button" onclick="generateMetaDescription()" class="min-w-[150px] rounded-xl bg-brand-100 text-brand-700 px-3 py-2 text-xs font-semibold hover:bg-brand-200">Tạo tự động</button>
            </div>
            @error('meta_description')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Meta keywords</label>
            <input type="text" name="meta_keywords" value="{{ old('meta_keywords', $post->meta_keywords) }}" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
            @error('meta_keywords')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">OG title</label>
            <div class="flex gap-2">
                <input type="text" name="og_title" id="og_title" value="{{ old('og_title', $post->og_title) }}" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                <button type="button" onclick="generateOgTitle()" class="min-w-[150px] rounded-xl bg-brand-100 text-brand-700 px-3 py-2 text-xs font-semibold hover:bg-brand-200">Tạo tự động</button>
            </div>
            @error('og_title')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">OG description</label>
            <div class="flex gap-2">
                <input type="text" name="og_description" id="og_description" value="{{ old('og_description', $post->og_description) }}" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                <button type="button" onclick="generateOgDescription()" class="min-w-[150px] rounded-xl bg-brand-100 text-brand-700 px-3 py-2 text-xs font-semibold hover:bg-brand-200">Tạo tự động</button>
            </div>
            @error('og_description')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">OG image</label>
            <input type="text" name="og_image" value="{{ old('og_image', $post->og_image) }}" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
            @error('og_image')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Twitter card</label>
            <input type="text" name="twitter_card" value="{{ old('twitter_card', $post->twitter_card) }}" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
            @error('twitter_card')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Robots index</label>
            <select name="robots_index" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                <option value="1" @if(old('robots_index', $post->robots_index)) selected @endif>Index</option>
                <option value="0" @if(!old('robots_index', $post->robots_index)) selected @endif>No Index</option>
            </select>
            @error('robots_index')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Robots follow</label>
            <select name="robots_follow" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                <option value="1" @if(old('robots_follow', $post->robots_follow)) selected @endif>Follow</option>
                <option value="0" @if(!old('robots_follow', $post->robots_follow)) selected @endif>No Follow</option>
            </select>
            @error('robots_follow')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Robots advanced</label>
            <input type="text" name="robots_advanced" value="{{ old('robots_advanced', $post->robots_advanced) }}" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
            @error('robots_advanced')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Schema type</label>
            <input type="text" name="schema_type" value="{{ old('schema_type', $post->schema_type) }}" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
            @error('schema_type')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Schema JSON</label>
            <div class="flex gap-2 mb-2">
            <button type="button" onclick="generateSchemaJson()" class="min-w-[150px] rounded-xl bg-brand-100 text-brand-700 px-3 py-2 text-xs font-semibold hover:bg-brand-200">Tạo tự động</button>
            </div>
            <textarea name="schema_json" class="min-h-[200px] w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">@if(old('schema_json') !== null){{ old('schema_json') }}@elseif($post->schema_json){{ is_array($post->schema_json) ? json_encode($post->schema_json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) : $post->schema_json }}@endif</textarea>
            @error('schema_json')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Hreflangs (JSON array)</label>
            <textarea name="hreflangs" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">{{ old('hreflangs', $post->hreflangs ? (is_array($post->hreflangs) ? json_encode($post->hreflangs, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) : $post->hreflangs) : '') }}</textarea>
            @error('hreflangs')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Breadcrumbs (JSON array)</label>
            <textarea name="breadcrumbs" class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">{{ old('breadcrumbs', $post->breadcrumbs ? (is_array($post->breadcrumbs) ? json_encode($post->breadcrumbs, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) : $post->breadcrumbs) : '') }}</textarea>
            @error('breadcrumbs')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Thẻ</label>
            <div class="mb-4">
                <div class="block text-sm font-medium mb-1">Chọn thẻ</div>
                <div class="flex flex-wrap gap-3">
                    @foreach($tags as $tag)
                        <label class="inline-flex items-center gap-2 bg-gray-100 rounded-xl px-3 py-2 cursor-pointer hover:bg-brand-50 transition">
                            <input type="checkbox" name="tags[]" value="{{ $tag->id }}" class="accent-brand-600 rounded border-gray-300" {{ collect(old('tags', $post->tags->pluck('id')->toArray()))->contains($tag->id) ? 'checked' : '' }}>
                            <span class="text-sm">{{ $tag->name }}</span>
                        </label>
                    @endforeach
                </div>
                @error('tags')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
            </div>
            <div class="mb-4">
                <div class="block text-sm font-medium mb-1">Loại bài viết</div>
                <div class="flex flex-wrap gap-3">
                    @foreach($postTypes as $type)
                        <label class="inline-flex items-center gap-2 bg-gray-100 rounded-xl px-3 py-2 cursor-pointer hover:bg-brand-50 transition">
                            <input type="checkbox" name="post_types[]" value="{{ $type->id }}" class="accent-brand-600 rounded border-gray-300" {{ collect(old('post_types', $post->postTypes->pluck('id')->toArray()))->contains($type->id) ? 'checked' : '' }}>
                            <span class="text-sm">{{ $type->name }}</span>
                        </label>
                    @endforeach
                </div>
                @error('post_types')<div class="text-red-500 text-sm mt-1">{{ $message }}</div>@enderror
            </div>
        <div class="flex items-center gap-3 pt-2">
            <button type="submit" class="rounded-xl bg-brand-600 text-white px-5 py-2.5 font-semibold hover:bg-brand-700">Cập nhật</button>
            <a href="{{ route('posts.index') }}" class="text-gray-600 hover:text-slate-900">Quay lại</a>
        </div>
    </form>
</div>
<script>
    function generateSlug() {
        var title = document.querySelector('input[name="title"]').value;
        var slug = title.normalize('NFD').replace(/[\u0300-\u036f]/g, '');
        slug = slug.toLowerCase().replace(/[^a-z0-9\s-]/g, '');
        slug = slug.replace(/\s+/g, '-').replace(/-+/g, '-');
        slug = slug.replace(/^-+|-+$/g, '');
        document.getElementById('slug').value = slug;
    }
    function generateMetaTitle() {
        var title = document.querySelector('input[name="title"]').value;
        document.getElementById('meta_title').value = title;
    }
    function generateMetaDescription() {
        var summary = document.querySelector('textarea[name="summary"]').value;
        if (summary) {
            document.getElementById('meta_description').value = summary;
        } else {
            var content = document.querySelector('textarea[name="content"]').value;
            document.getElementById('meta_description').value = content.substring(0, 160);
        }
    }
    function generateOgTitle() {
        var metaTitle = document.getElementById('meta_title').value;
        document.getElementById('og_title').value = metaTitle;
    }
    function generateOgDescription() {
        var metaDescription = document.getElementById('meta_description').value;
        if (metaDescription) {
            document.getElementById('og_description').value = metaDescription;
        } else {
            var summary = document.querySelector('textarea[name="summary"]').value;
            document.getElementById('og_description').value = summary.substring(0, 160);
        }
    }
    function generateSchemaJson() {
        var title = document.querySelector('input[name="title"]').value;
        var summary = document.querySelector('textarea[name="summary"]').value;
        var content = document.querySelector('textarea[name="content"]').value;
        var coverImage = document.querySelector('input[name="cover_image_url"]').value;
        var publishedAt = document.querySelector('input[name="published_at"]').value;
        var authorId = document.querySelector('input[name="author_id"]').value;
        var schema = {
            "@@context": "https://schema.org",
            "@@type": "Article",
            "headline": title,
            "description": summary,
            "articleBody": content,
            "image": coverImage,
            "datePublished": publishedAt,
            "author": {
                "@@type": "Person",
                "name": authorId
            }
        };
        document.querySelector('textarea[name="schema_json"]').value = JSON.stringify(schema, null, 2);
    }
</script>
@endsection