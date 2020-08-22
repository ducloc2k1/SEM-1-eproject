<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_tag', function (Blueprint $table) {
            $table->integer('tag_id')->unsigned();
            $table->integer('blog_id')->unsigned();
            $table->primary(['tag_id', 'blog_id']);
            $table->foreign('tag_id')->references('id')->on('tags');
            $table->foreign('blog_id')->references('id')->on('blogs');
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
        Schema::dropIfExists('tag_blogs');
    }
}
