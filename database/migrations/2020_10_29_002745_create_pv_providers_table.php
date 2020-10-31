<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePvProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pv_providers', function (Blueprint $table) {
            $table->increments('provider_prov');
            $table->string('company_name_prov');
            $table->bigInteger('nit_prov');
            $table->string('address_prov');
            $table->string('name_manager_prov');
            $table->integer('phone_prov');
            $table->string('email_prov');
            $table->integer('state_prov')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pv_providers');
    }
}
