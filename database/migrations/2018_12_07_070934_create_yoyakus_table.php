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
            $table->string('adult');
            $table->string('children');
            $table->string('name');
            $table->string('email');
            $table->string('tel',11);
            $table->string('address');
            $table->string('userid');
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
        Schema::dropIfExists('yoyakus');
    }
}