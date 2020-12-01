<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'pv_purchases';

    protected $primaryKey = 'purchase_pur';
}
