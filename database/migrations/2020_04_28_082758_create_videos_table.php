<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('author_id');
            $table->text('headline');
            $table->text('description');
            $table->boolean('use_iframe')->default(0);
            $table->text('iframe');
            $table->string('1080_src');
            $table->string('720_src');
            $table->string('480_src');
            $table->string('360_src');
            $table->string('240_src');
            $table->string('144_src');
            $table->string('cover_original_src');
            $table->string('cover_src');
            $table->string('min_cover_src');

            $table->timestamps();

            $table->foreign('author_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
