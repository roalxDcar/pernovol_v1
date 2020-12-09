<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePvSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pv_sales', function (Blueprint $table) {
            $table->increments('sale_sal');
            $table->integer('branch_sal')->unsigned()->nullable();
            $table->integer('client_sal')->unsigned();
            $table->integer('user_sal')->unsigned();
            $table->string('invoice_number_sal');
            $table->dateTime('purchase_date_sal');
            $table->double('tribute_sal');
            $table->double('total_sal');
            $table->double('discount_sal')->nullable();
            $table->integer('state_sal')->default(1);

            $table->integer('type_sal')->default(1);
            $table->integer('type_purchase_sal')->default(1);

            $table->timestamps();

            $table->foreign('branch_sal')->references('branch_bra')->on('pv_branches');
            $table->foreign('client_sal')->references('client_cli')->on('pv_clients');
            $table->foreign('user_sal')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pv_sales');
    }
}
