<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('comments_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('news_id');
            $table->string('comment',200);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('news_id')->references('news_id')->on('news');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
