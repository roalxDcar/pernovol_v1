<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePvBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pv_branches', function (Blueprint $table) {
            $table->increments('branch_bra');
            $table->string('name_bra');
            $table->string('address_bra');
            $table->string('phone_bra');
            $table->string('nit_bra');
            $table->integer('state_bra')->default(1);
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
        Schema::dropIfExists('pv_branches');
    }
}
