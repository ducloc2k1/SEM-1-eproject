<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_products', function (Blueprint $table) {
            $table->integer('pro_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->primary(['pro_id','tag_id']);
            $table->foreign('pro_id')->references('id')->on('products');
            $table->foreign('tag_id')->references('id')->on('tags');
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
        Schema::dropIfExists('tag_products');
    }
}
