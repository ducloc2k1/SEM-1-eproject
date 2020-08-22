<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image',255)->nullable();
            $table->text('image_list')->nullable();
            $table->float('price',12,4)->nullable();
            $table->string('desciption')->nullable();
            $table->float('sale_price',12,2)->default(0);
            $table->integer('quantity')->default(0);
            $table->integer('category_pro_id')->unsigned();
            $table->text('content')->nullable();
            $table->tinyInteger('status')->nullable()->default(0);
            $table->foreign('category_pro_id')->references('id')->on('category_products');
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
        Schema::dropIfExists('products');
    }
}
