<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventGrandmaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_grandma', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('event_id')->unsigned();
            $table->integer('grandma_id')->unsigned();

            $table->timestamps();

            //Ralation
            $table->foreign('event_id')->references('id')->on('events')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('grandma_id')->references('id')->on('grandmas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_grandma');
    }
}
