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
}
