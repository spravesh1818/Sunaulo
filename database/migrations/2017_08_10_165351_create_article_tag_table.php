<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('articles_id')->length(10)->unsigned();
            $table->integer('tag_id')->length(10)->unsigned();
            
        });

        Schema::table('articles_tag', function(Blueprint $table) {
            $table->foreign('articles_id')->references('id')->on('articles');
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles_tag');
    }
}
