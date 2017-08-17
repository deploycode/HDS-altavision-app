<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('first_menu_id')->unsigned();
            $table->foreign('first_menu_id')->references('id')->on('first_menus')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('second_menu_id')->unsigned()->nullable();
            $table->foreign('second_menu_id')->references('id')->on('second_menus')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('third_menu_id')->unsigned()->nullable();
            $table->foreign('third_menu_id')->references('id')->on('third_menus')->onDelete('cascade')->onUpdate('cascade');

            $table->string('title');
            $table->string('slug');
            $table->longText('content');

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
        Schema::drop('posts');
    }
}
