<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_comments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('page_id');

            $table->text('content');

            $table->timestamps();

            $table->foreign('author_id')
                ->references('id')
                ->on('users');
            $table->foreign('page_id')
                ->references('id')
                ->on('pages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_comments');
    }
}
