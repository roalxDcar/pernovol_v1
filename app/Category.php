<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'pv_categories';

    protected $primaryKey = 'category_cat';
}
