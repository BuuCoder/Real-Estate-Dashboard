<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{
    public $timestamps = false;

    protected $fillable = ['code', 'name'];

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_post_types');
    }
}
