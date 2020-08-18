<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumMusicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_musics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('music_id')->nullable();
            $table->unsignedBigInteger('album_id')->nullable();


            $table->foreign('music_id')
                ->references('id')
                ->on('musics');

            $table->foreign('album_id')
                ->references('id')
                ->on('albums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album_musics');
    }
}
