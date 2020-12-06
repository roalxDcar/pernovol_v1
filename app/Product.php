<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'pv_products';

    protected $primaryKey = 'product_prod';

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_prod');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_prod');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_prod');
    }
}
