<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePvDetailPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pv_detail_purchases', function (Blueprint $table) {
            $table->integer('purchase_dpur')->unsigned();
            $table->integer('product_dpur')->unsigned();
            $table->timestamps();
            
            $table->foreign('purchase_dpur')->references('purchase_pur')->on('pv_purchases');
            $table->foreign('product_dpur')->references('product_prod')->on('pv_products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pv_detail_purchases');
    }
}
