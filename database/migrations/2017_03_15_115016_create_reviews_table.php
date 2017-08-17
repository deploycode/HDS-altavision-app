<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('review');
            $table->string('photo');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('reviews');
    }
}
