<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('section_id')->nullable();
            $table->unsignedBigInteger('cover_id')->nullable();

            $table->string('keywords')->nullable();

            $table->string('slug')->unique();
            $table->string('headline');

            $table->longText('content');
            $table->text('excerpt');

            $table->boolean('is_published')->default(0);
            $table->timestamp('published_at')->nullable();

            $table->timestamps();

            $table->foreign('author_id')
                ->references('id')
                ->on('users');
            $table->foreign('section_id')
                ->references('id')
                ->on('sections');
            $table->foreign('cover_id')
                ->references('id')
                ->on('articles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
