<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideopostCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videopost_comments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('videopost_id');

            $table->text('content');

            $table->timestamps();

            $table->foreign('author_id')
                ->references('id')
                ->on('users');
            $table->foreign('videopost_id')
                ->references('id')
                ->on('videoposts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videopost_comments');
    }
}
