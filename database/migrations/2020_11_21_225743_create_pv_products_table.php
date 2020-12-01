<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePvProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pv_products', function (Blueprint $table) {
            $table->increments('product_prod');

            $table->integer('category_prod')->unsigned();
            $table->integer('brand_prod')->unsigned();
            $table->integer('unit_prod')->unsigned();

            $table->string('code_prod');
            $table->string('name_prod');

            $table->integer('stock_prod')->nullable();
            $table->integer('stock_minimum_prod')->nullable();
            $table->double('purchase_price_prod')->nullable();
            $table->double('sale_price_prod')->nullable();
            $table->double('wholesale_price_prod')->nullable();

            $table->text('detail_prod')->nullable();
            $table->string('photo_prod')->nullable();
            $table->integer('exp_prod')->nullable();
            $table->date('expiration_prod')->nullable();
            $table->integer('state_prod')->default(1);
            $table->timestamps();

            $table->foreign('category_prod')->references('category_cat')->on('pv_categories');
            $table->foreign('brand_prod')->references('brand_bra')->on('pv_brands');
            $table->foreign('unit_prod')->references('unit_uni')->on('pv_units');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pv_products');
    }
}
