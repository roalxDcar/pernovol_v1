<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePvClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pv_clients', function (Blueprint $table) {
            $table->increments('client_cli');
            $table->string('name_cli')->nullable();
            $table->bigInteger('ci_nit_cli')->nullable();
            $table->string('email');
            $table->string('phone_cli');
            $table->string('address_cli');
            $table->integer('state_cli')->default(1);
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
        Schema::dropIfExists('pv_clients');
    }
}
