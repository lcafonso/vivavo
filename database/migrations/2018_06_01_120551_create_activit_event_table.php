<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activit_event', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('activit_id')->unsigned();
            $table->integer('event_id')->unsigned();

            $table->time('scheduled')->nullable();

            $table->timestamps();

            //Ralation
            $table->foreign('activit_id')->references('id')->on('activits')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('event_id')->references('id')->on('events')
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
        Schema::dropIfExists('activit_event');
    }
}
