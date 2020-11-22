<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarouselItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carousel_items', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('carousel_id');
            $table->unsignedBigInteger('image_id');

            $table->string('headline')->nullable();
            $table->string('description')->nullable();

            $table->timestamps();

            $table->foreign('image_id')
                ->references('id')
                ->on('images');
            $table->foreign('carousel_id')
                ->references('id')
                ->on('carousels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carousel_items');
    }
}
