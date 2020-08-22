<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_attributes', function (Blueprint $table) {
            $table->integer('product_id')->unsigned();
            $table->integer('attribute_value_id')->unsigned();
            $table->primary(['product_id', 'attribute_value_id']);
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('attribute_value_id')->references('id')->on('attribute_values');
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
        Schema::dropIfExists('product_attributes');
    }
}
