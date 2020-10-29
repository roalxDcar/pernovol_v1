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
            $table->increments('provider_id');
            $table->string('company_name');
            $table->integer('nit');
            $table->string('address');
            $table->string('name_manager');
            $table->integer('phone');
            $table->string('email');
            $table->integer('state')->default();
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
