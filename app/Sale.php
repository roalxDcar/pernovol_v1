<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
	protected $table 	  = 'pv_sales';
    protected $primaryKey = 'sale_sal';

    public function sales()
    {
        return $this->belongsToMany(Product::class, 'pv_detail_sales', 'sales_dsal', 'product_dsal');
    }

    public function detailSale()
    {
    	return $this->hasMany(DetailSale::class, 'sales_dsal');	
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_sal'); 
    }
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_sal'); 
    }
    
}
