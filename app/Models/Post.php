<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $table = 'posts';

    // Cho phép fill nhanh
    protected $fillable = [
        'author_id',
        'status',
        'title',
        'slug',
        'summary',
        'content',
        'content_fmt',
        'cover_image_url',
        'reading_minutes',
        'locale',
        'published_at',
        'canonical_url',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_title',
        'og_description',
        'og_image',
        'twitter_card',
        'robots_index',
        'robots_follow',
        'robots_advanced',
        'schema_type',
        'schema_json',
        'hreflangs',
        'breadcrumbs',
    ];

    // Ép kiểu
    protected $casts = [
        'reading_minutes' => 'integer',
        'published_at'    => 'datetime',
        'created_at'      => 'datetime',
        'updated_at'      => 'datetime',
        'robots_index'    => 'boolean',
        'robots_follow'   => 'boolean',
        'schema_json'     => 'array',
        'hreflangs'       => 'array',
        'breadcrumbs'     => 'array',
    ];

    // Quan hệ
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }

    public function postTypes()
    {
        return $this->belongsToMany(PostType::class, 'post_post_types');
    }

    // Helper: auto tạo slug nếu trống
    public static function booted(): void
    {
        static::saving(function (Post $post) {
            if (empty($post->slug) && !empty($post->title)) {
                $post->slug = Str::slug($post->title);
            }
        });
    }

    // Scopes tiện dụng
    public function scopePublished(Builder $q): Builder
    {
        return $q->where('status', 'published');
    }

    public function scopeSearch(Builder $q, ?string $term): Builder
    {
        if (!$term) return $q;
        return $q->where(function ($qq) use ($term) {
            $qq->where('title', 'ILIKE', "%{$term}%")
                ->orWhere('summary', 'ILIKE', "%{$term}%")
                ->orWhere('content', 'ILIKE', "%{$term}%");
        });
    }
}
