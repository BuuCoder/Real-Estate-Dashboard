<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $table = 'listings';

    protected $fillable = [
        'user_id','property_type_id','land_use_type_id','legal_status_id',
        'province_id','district_id','ward_id','street','address','lat','lng',
        'title','description','area_land','area_built','width','length',
        'road_width','frontage','bedrooms','bathrooms','floors','direction',
        'price_total','currency','status','published_at','expired_at'
    ];

    protected $casts = [
        'lat' => 'float','lng' => 'float','frontage' => 'boolean',
        'area_land' => 'decimal:2','area_built' => 'decimal:2',
        'width' => 'decimal:2','length' => 'decimal:2','road_width' => 'decimal:2',
        'bedrooms' => 'integer','bathrooms' => 'integer','floors' => 'integer',
        'price_total' => 'decimal:2','published_at' => 'datetime','expired_at' => 'datetime'
    ];

    public function images(){ return $this->hasMany(Image::class,'listing_id'); }
    public function amenities(){ return $this->belongsToMany(Amenity::class,'listing_amenities','listing_id','amenity_id'); }
}
