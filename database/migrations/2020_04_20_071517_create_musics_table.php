<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('singer_id');
            $table->string('name');
            $table->string('slug');
            $table->string('image_url');
            $table->string('file_url');
            $table->string('fullTime');
            $table->text('description');

            $table->foreign('singer_id')
                ->references('id')
                ->on('singers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musics');
    }
}
