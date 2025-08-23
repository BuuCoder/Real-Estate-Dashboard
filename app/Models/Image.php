<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    public $timestamps = false;
    protected $fillable = ['listing_id','url','is_cover','sort_order'];
    protected $casts = ['is_cover'=>'boolean','sort_order'=>'integer'];
    public function listing(){ return $this->belongsTo(Listing::class,'listing_id'); }
}
