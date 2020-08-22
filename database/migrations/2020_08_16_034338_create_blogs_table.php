<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('summary');
            $table->text('content');
            $table->string('slug');
            $table->string('image');
            $table->string('thumbnail_image');
            $table->tinyInteger('status')->default(0);
            $table->integer('cat_blog_id')->unsigned();
            $table->integer('author_id')->unsigned();
            $table->integer('view')->unsigned()->default(0);
            $table->timestamps();
            $table->foreign('cat_blog_id')->references('id')->on('cat_blogs');
            //
            $table->foreign('author_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
