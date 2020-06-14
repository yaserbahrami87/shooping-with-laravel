<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id_news');
            //$table->bigInteger('id_news')->unique();
            $table->string('titrnews',200);
            $table->text('textnews');
            $table->string('summary');
            $table->unsignedBigInteger('user_id');
            $table->bigInteger('category_id');
            $table->string('img')->default('noimage.jpg');
            $table->string('video')->default('https://www.youtube.com/watch?v=5_rLJNq7Rw8');
            $table->string('tags')->default('NULL');
            $table->integer('views')->default(0);
            $table->integer('likes')->default(0);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
