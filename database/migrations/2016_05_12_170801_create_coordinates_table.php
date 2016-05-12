<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoordinatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordinates', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('polygon_id')->unsigned();
            $table->string('latitude');
            $table->string('longitude');
            $table->integer('order_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('coordinates');
    }
}
