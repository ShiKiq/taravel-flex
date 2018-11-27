<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYoyakusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yoyakus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adult',100);
            $table->string('children',100);
            $table->string('name',20);
            $table->string('email',50);
            $table->string('tel',11);
            $table->string('address',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yoyakus');
    }
}
