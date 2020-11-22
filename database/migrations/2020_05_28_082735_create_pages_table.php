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
            $table->id();

            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('cover_id')->nullable();

            $table->string('keywords')->nullable();

            $table->string('slug')->unique();
            $table->string('headline');

            $table->longText('content');
            $table->text('excerpt');

            $table->timestamps();

            $table->foreign('author_id')
                ->references('id')
                ->on('users');
            $table->foreign('cover_id')
                ->references('id')
                ->on('images');
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
