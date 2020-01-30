<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lang', 50);
            $table->longText('content');
            $table->boolean('published');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('faculty_id');
            $table->unsignedInteger('viewed');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('faculty_id')->references('id')->on('faculties');
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
        Schema::dropIfExists('pages');
    }
}
