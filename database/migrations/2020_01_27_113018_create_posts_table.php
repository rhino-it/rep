<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('post_category_id');
            $table->unsignedBigInteger('user_id');
            $table->string('lang', 50);
            $table->longText('content');
            $table->boolean('published');
            $table->dateTime('published_date');
            $table->unsignedInteger('viewed');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('post_category_id')->references('id')->on('post_categories');

            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
