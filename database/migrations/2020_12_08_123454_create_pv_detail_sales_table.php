<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePvDetailSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pv_detail_sales', function (Blueprint $table) {
            $table->increments('datail_sale_dsal');
            $table->integer('sales_dsal')->unsigned();
            $table->integer('product_dsal')->unsigned();
            $table->double('quantity_dsal');
            $table->double('discount_dsal')->nullable();
            $table->double('price_dsal');
            $table->double('total_dsal');
            $table->timestamps();
            
            $table->foreign('sales_dsal')->references('sale_sal')->on('pv_sales');
            $table->foreign('product_dsal')->references('product_prod')->on('pv_products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pv_detail_sales');
    }
}
