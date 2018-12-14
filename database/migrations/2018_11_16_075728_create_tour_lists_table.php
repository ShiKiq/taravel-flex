<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tours');
            $table->string('day');
            $table->integer('price');
            $table->string('hotel');
            $table->integer('stocks');
            $table->integer('prefectures');
            $table->string('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tour_lists');
    }
}
