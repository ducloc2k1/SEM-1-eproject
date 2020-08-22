<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->float('total_price');
            $table->integer('cus_id')->unsigned();
            $table->text('bill_note')->nullable();
            $table->integer('total_quantity');
            $table->integer('payment_id')->unsigned();
            $table->integer('shipping_id')->unsigned();
            $table->tinyInteger('status')->default(1);
            $table->foreign('cus_id')->references('id')->on('customers');
            $table->foreign('payment_id')->references('id')->on('payments');
            $table->foreign('shipping_id')->references('id')->on('shippings');
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
        Schema::dropIfExists('bills');
    }
}
