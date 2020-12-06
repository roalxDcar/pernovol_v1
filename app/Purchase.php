<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'pv_purchases';

    protected $primaryKey = 'purchase_pur';

    public function purchases()
    {
        return $this->belongsToMany(Product::class, 'pv_detail_purchases', 'purchase_dpur', 'product_dpur');
    }
}
