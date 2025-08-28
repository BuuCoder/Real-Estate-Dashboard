@extends('dashboard.layout')

@section('title', 'Tạo bài viết mới')

@section('content')
    <div class="flex justify-center py-2">
        <form action="{{ route('posts.store') }}" method="POST" class="space-y-6 w-full bg-white rounded-3xl shadow-panel p-8"
            enctype="multipart/form-data">
            @csrf
            <h2 class="text-xl md:text-2xl font-extrabold mb-2">Tạo bài viết mới</h2>
            {{-- Hiển thị lỗi --}}
            @if ($errors->any())
                <div
                    class="mb-4 rounded-lg bg-red-100 px-4 py-3 text-red-700 text-xs md:text-md font-semibold border border-red-300">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div>
                <label class="block text-sm font-medium mb-1">Trạng thái</label>
                <select name="status"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400"
                    required>
                    @foreach ($statuses as $key => $label)
                        @php
                            $viLabel =
                                [
                                    'draft' => 'Nháp',
                                    'published' => 'Đã xuất bản',
                                    'pending' => 'Chờ duyệt',
                                    'archived' => 'Lưu trữ',
                                    'rejected' => 'Từ chối',
                                ][$key] ?? $label;
                        @endphp
                        <option value="{{ $key }}" {{ old('status') == $key ? 'selected' : '' }}>
                            {{ $viLabel }}</option>
                    @endforeach
                </select>
                @error('status')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Tiêu đề</label>
                <input type="text" name="title" value="{{ old('title') }}"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400"
                    required>
                @error('title')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Slug</label>
                <input type="text" name="slug" id="slug" value="{{ old('slug') }}"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                <button type="button" onclick="generateSlug()"
                    class="mt-2 px-3 py-1 rounded bg-brand-100 text-brand-700 text-xs font-semibold hover:bg-brand-200">Được
                    tạo từ tiêu đề</button>
                @error('slug')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <script>
                function slugify(str) {
                    return str
                        .toString()
                        .normalize('NFD').replace(/[\u0300-\u036f]/g, '') // Remove accents
                        .toLowerCase()
                        .trim()
                        .replace(/[^a-z0-9\s-]/g, '') // Remove invalid chars
                        .replace(/\s+/g, '-') // Replace spaces with -
                        .replace(/-+/g, '-'); // Collapse dashes
                }

                function generateSlug() {
                    var title = document.querySelector('input[name="title"]').value;
                    document.getElementById('slug').value = slugify(title);
                }
            </script>
            <div>
                <label class="block text-sm font-medium mb-1">Tóm tắt</label>
                <textarea name="summary"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">{{ old('summary') }}</textarea>
                @error('summary')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Nội dung</label>
                <textarea name="content"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400"
                    required>{{ old('content') }}</textarea>
                @error('content')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Định dạng nội dung</label>
                <select name="content_fmt"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                    <option value="text" {{ old('content_fmt') == 'text' ? 'selected' : '' }}>Text</option>
                    <option value="html" {{ old('content_fmt') == 'html' ? 'selected' : '' }}>HTML</option>
                </select>
                @error('content_fmt')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Ảnh cover</label>
                <input type="text" name="cover_image_url" id="cover_image_url" value="{{ old('cover_image_url') }}"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400"
                    oninput="document.getElementById('cover_image_preview').src = this.value">
                @error('cover_image_url')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
                <div class="mt-2">
                    <img id="cover_image_preview" src="{{ old('cover_image_url') }}" alt="Preview"
                        class="max-h-40 rounded-xl border border-gray-200"
                        style="display: {{ old('cover_image_url') ? 'block' : 'none' }};">
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
                <input type="number" name="reading_minutes" value="{{ old('reading_minutes', 0) }}"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                @error('reading_minutes')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Ngôn ngữ</label>
                <select name="locale"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                    <option value="vi" {{ old('locale', 'vi') == 'vi' ? 'selected' : '' }}>Tiếng Việt</option>
                    <option value="en" {{ old('locale') == 'en' ? 'selected' : '' }}>English</option>
                </select>
                @error('locale')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Ngày đăng</label>
                <input type="date" name="published_at" value="{{ old('published_at', \Carbon\Carbon::now()->format('Y-m-d')) }}"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                @error('published_at')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Canonical URL</label>
                <div class="flex gap-2">
                    <input type="text" name="canonical_url" id="canonical_url" value="{{ old('canonical_url') ?? url('/') }}"
                        class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                    <button type="button"
                        onclick="document.getElementById('canonical_url').value = window.location.origin + '/' + document.getElementById('slug').value"
                        class="w-[150px] px-3 py-1 rounded bg-brand-100 text-brand-700 text-xs font-semibold hover:bg-brand-200">
                        Tạo tự động
                    </button>
                </div>
                @error('canonical_url')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <script>
                document.getElementById('slug').addEventListener('input', function() {
                    var canonical = document.getElementById('canonical_url');
                    canonical.value = window.location.origin + '/' + this.value;
                });
            </script>
            <div>
                <label class="block text-sm font-medium mb-1">Meta title</label>
                <div class="flex gap-2">
                    <input type="text" name="meta_title" id="meta_title" value="{{ old('meta_title', old('title')) }}"
                        class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                    <button type="button" onclick="document.getElementById('meta_title').value = document.querySelector('input[name=title]').value"
                        class="w-[150px] px-3 py-1 rounded bg-brand-100 text-brand-700 text-xs font-semibold hover:bg-brand-200">Tạo tự động</button>
                </div>
                @error('meta_title')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Meta description</label>
                <div class="flex gap-2">
                    <input type="text" name="meta_description" id="meta_description" value="{{ old('meta_description', old('summary')) }}"
                        class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                    <button type="button" onclick="document.getElementById('meta_description').value = document.querySelector('textarea[name=summary]').value"
                        class="w-[150px] px-3 py-1 rounded bg-brand-100 text-brand-700 text-xs font-semibold hover:bg-brand-200">Tạo tự động</button>
                </div>
                @error('meta_description')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Meta keywords</label>
                <input type="text" name="meta_keywords" id="meta_keywords" value="{{ old('meta_keywords') }}"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                @error('meta_keywords')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">OG title</label>
                <div class="flex gap-2">
                    <input type="text" name="og_title" id="og_title" value="{{ old('og_title', old('title')) }}"
                        class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                    <button type="button" onclick="document.getElementById('og_title').value = document.querySelector('input[name=title]').value"
                        class="w-[150px] px-3 py-1 rounded bg-brand-100 text-brand-700 text-xs font-semibold hover:bg-brand-200">Tạo tự động</button>
                </div>
                @error('og_title')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">OG description</label>
                <div class="flex gap-2">
                    <input type="text" name="og_description" id="og_description" value="{{ old('og_description', old('summary')) }}"
                        class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                    <button type="button" onclick="document.getElementById('og_description').value = document.querySelector('textarea[name=summary]').value"
                        class="w-[150px] px-3 py-1 rounded bg-brand-100 text-brand-700 text-xs font-semibold hover:bg-brand-200">Tạo tự động</button>
                </div>
                @error('og_description')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">OG image</label>
                <input type="text" name="og_image" id="og_image" value="{{ old('og_image', old('cover_image_url')) }}"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                @error('og_image')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Twitter card</label>
                <input type="text" name="twitter_card" value="{{ old('twitter_card', 'summary_large_image') }}"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                @error('twitter_card')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <script>
                // Ảnh og_image đã xử lý đúng
                document.getElementById('cover_image_url').addEventListener('input', function() {
                    var val = this.value;
                    var ogImg = document.getElementById('og_image');
                    if (!ogImg.value) {
                        ogImg.value = val;
                    }
                });
            </script>
            <div>
                <label class="block text-sm font-medium mb-1">Robots index</label>
                <select name="robots_index" id="robots_index"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                    <option value="1" {{ old('robots_index', '1') == '1' ? 'selected' : '' }}>Index</option>
                    <option value="0" {{ old('robots_index') == '0' ? 'selected' : '' }}>No Index</option>
                </select>
                @error('robots_index')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Robots follow</label>
                <select name="robots_follow" id="robots_follow"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                    <option value="1" {{ old('robots_follow', '1') == '1' ? 'selected' : '' }}>Follow</option>
                    <option value="0" {{ old('robots_follow') == '0' ? 'selected' : '' }}>No Follow</option>
                </select>
                @error('robots_follow')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Robots advanced</label>
                <input type="text" name="robots_advanced" id="robots_advanced" value="{{ old('robots_advanced', 'max-snippet:-1, max-image-preview:large, max-video-preview:-1') }}"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                @error('robots_advanced')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Schema type</label>
                <input type="text" name="schema_type" id="schema_type" value="{{ old('schema_type', 'Article') }}"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">
                @error('schema_type')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Schema JSON</label>
                <textarea name="schema_json" id="schema_json"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">{{ old('schema_json', '') }}</textarea>
                @error('schema_json')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Hreflangs (JSON array)</label>
                <textarea name="hreflangs" id="hreflangs"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">{{ old('hreflangs', '[{"hreflang":"vi","href":"'.url('/').'"}]') }}</textarea>
                @error('hreflangs')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Breadcrumbs (JSON array)</label>
                <textarea name="breadcrumbs" id="breadcrumbs"
                    class="w-full rounded-xl bg-gray-100 border border-gray-200 py-2.5 px-3 outline-none focus:ring-2 focus:ring-brand-400">{{ old('breadcrumbs', '[{"name":"Trang chủ","url":"'.url('/').'"}]') }}</textarea>
                @error('breadcrumbs')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Thẻ</label>
                <div class="mb-4">
                    <div class="block text-sm font-medium mb-1">Chọn thẻ</div>
                    <div class="flex flex-wrap gap-3">
                        @foreach ($tags as $tag)
                            <label
                                class="inline-flex items-center gap-2 bg-gray-100 rounded-xl px-3 py-2 cursor-pointer hover:bg-brand-50 transition">
                                <input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                                    class="accent-brand-600 rounded border-gray-300"
                                    {{ collect(old('tags'))->contains($tag->id) ? 'checked' : '' }}>
                                <span class="text-sm">{{ $tag->name }}</span>
                            </label>
                        @endforeach
                    </div>
                    @error('tags')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <div class="block text-sm font-medium mb-1">Loại bài viết</div>
                    <div class="flex flex-wrap gap-3">
                        @foreach ($postTypes as $type)
                            <label
                                class="inline-flex items-center gap-2 bg-gray-100 rounded-xl px-3 py-2 cursor-pointer hover:bg-brand-50 transition">
                                <input type="checkbox" name="post_types[]" value="{{ $type->id }}"
                                    class="accent-brand-600 rounded border-gray-300"
                                    {{ collect(old('post_types'))->contains($type->id) ? 'checked' : '' }}>
                                <span class="text-sm">{{ $type->name }}</span>
                            </label>
                        @endforeach
                    </div>
                    @error('post_types')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex items-center gap-3 pt-2">
                    <button type="submit"
                        class="rounded-xl bg-brand-600 text-white px-5 py-2.5 font-semibold hover:bg-brand-700">Lưu</button>
                    <a href="{{ route('posts.index') }}" class="text-gray-600 hover:text-slate-900">Quay lại</a>
                </div>
        </form>
    </div>
@endsection
