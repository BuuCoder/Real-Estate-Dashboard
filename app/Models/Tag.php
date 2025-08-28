<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = false;

    protected $fillable = ['code', 'name'];

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_tags');
    }
}
