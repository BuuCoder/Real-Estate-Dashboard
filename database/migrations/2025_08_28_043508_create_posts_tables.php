<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // post_types
        Schema::create('post_types', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('code')->unique();
            $table->string('name');
        });

        // tags
        Schema::create('tags', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('code')->unique();
            $table->string('name');
        });

        // posts
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('author_id')->nullable();

            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');

            // Nội dung chính
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('summary')->nullable();
            $table->longText('content');
            $table->enum('content_fmt', ['markdown', 'html'])->default('markdown');
            $table->string('cover_image_url')->nullable();
            $table->integer('reading_minutes')->nullable();
            $table->string('locale')->default('vi-VN');

            // Lịch phát hành
            $table->timestampTz('published_at')->nullable();
            $table->timestampsTz();

            // SEO
            $table->string('canonical_url')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();

            // Open Graph / Twitter
            $table->string('og_title')->nullable();
            $table->string('og_description')->nullable();
            $table->string('og_image')->nullable();
            $table->enum('twitter_card', ['summary', 'summary_large_image'])->default('summary_large_image');

            // Robots
            $table->boolean('robots_index')->default(true);
            $table->boolean('robots_follow')->default(true);
            $table->string('robots_advanced')->nullable();

            // Structured data
            $table->string('schema_type')->nullable();
            $table->jsonb('schema_json')->nullable();

            // Quốc tế hoá / điều hướng
            $table->jsonb('hreflangs')->nullable();
            $table->jsonb('breadcrumbs')->nullable();
        });

        // pivot posts ↔ post_types
        Schema::create('post_post_types', function (Blueprint $table) {
            $table->unsignedBigInteger('post_id');
            $table->unsignedSmallInteger('post_type_id');
            $table->primary(['post_id', 'post_type_id']);
        });

        // pivot posts ↔ tags
        Schema::create('post_tags', function (Blueprint $table) {
            $table->unsignedBigInteger('post_id');
            $table->unsignedSmallInteger('tag_id');
            $table->primary(['post_id', 'tag_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('post_tags');
        Schema::dropIfExists('post_post_types');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('post_types');
    }
};
