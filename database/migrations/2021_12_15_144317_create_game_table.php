<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image_preview');
            $table->string('trailer_video');
            $table->string('description');
            $table->string('long_description');
            $table->integer('genre_id');
            $table->datetime('release_date');
            $table->string('developer');
            $table->string('publisher');
            $table->boolean('for_adult');
            $table->double('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game');
    }
}
