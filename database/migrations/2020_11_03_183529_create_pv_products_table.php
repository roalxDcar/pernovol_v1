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
            $table->string('code_prod');
            $table->string('name_prod');
            $table->integer('category_prod')->unsigned();
            $table->string('photo_prod');
            $table->integer('exp_prod');
            $table->date('expiration_prod')->nullable();
            $table->integer('state_prod')->default(1);
            $table->timestamps();

            $table->foreign('category_prod')->references('category_cat')->on('pv_categories');
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
