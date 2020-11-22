<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('section_id')->nullable();
            $table->unsignedBigInteger('cover_id')->nullable();

            $table->string('slug')->unique();
            $table->string('headline');
            $table->longText('description');

            $table->boolean('use_iframe')->default(0);
            $table->text('iframe');
            $table->string('src')->nullable();

            $table->boolean('is_published');
            $table->timestamp('published_at');

            $table->timestamps();

            $table->foreign('author_id')
                ->references('id')
                ->on('users');
            $table->foreign('section_id')
                ->references('id')
                ->on('sections');
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
        Schema::dropIfExists('presentations');
    }
}
