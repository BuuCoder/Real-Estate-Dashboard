<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    protected $table = 'amenities';
    protected $fillable = ['code','name','group_name'];
    public function listings(){ return $this->belongsToMany(Listing::class,'listing_amenities','amenity_id','listing_id'); }
}
