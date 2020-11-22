<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('wall_id')->nullable();
            $table->unsignedBigInteger('main_menu');

            $table->string('site_name');
            $table->string('headline');
            $table->string('sub_headline');


            $table->timestamps();

            $table->foreign('author_id')
                ->references('id')
                ->on('users');
            $table->foreign('wall_id')
                ->references('id')
                ->on('images');
            $table->foreign('main_menu')
                ->references('id')
                ->on('menus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
