<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePvPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pv_purchases', function (Blueprint $table) {
            $table->increments('purchase_pur');
            $table->integer('branch_pur')->unsigned();
            $table->integer('provider_pur')->unsigned();
            $table->integer('user_pur')->unsigned();
            $table->string('invoice_number_pur');
            $table->dateTime('purchase_date_pur');
            $table->double('tribute_pur');
            $table->double('total_pur');
            $table->integer('state_pur')->default(1);

            $table->integer('type_pur')->default(1);
            $table->integer('type_purchase_pur')->default(1);

            $table->timestamps();

            $table->foreign('branch_pur')->references('branch_bra')->on('pv_branches');
            $table->foreign('provider_pur')->references('provider_prov')->on('pv_providers');
            $table->foreign('user_pur')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pv_purchases');
    }
}
