<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'brand', 'article', 'name', 'series', 'description', 'type',
        'size_guide_height', 'size_guide_length', 'size_guide_width',
        'handle_length', 'features', 'color', 'decoration', 'print',
        'release_year', 'edition', 'brand_country', 'manufacturer_country',
        'price', 'package_description', 'package_type',
        'package_height', 'package_length', 'package_width',
        'weight', 'set', 'care_instructions', 'quantity'
    ];


    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
