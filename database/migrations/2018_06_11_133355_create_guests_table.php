<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('event_id')->unsigned();
            
            $table->string('name');
            $table->string('surname');

            $table->string('email');
            //$table->string('password');
            
            $table->mediumText('comment')->nullable();

            $table->integer('num_adults')->unsigned()->nullable();
            $table->integer('num_children')->unsigned()->nullable();

            $table->timestamps();

            //Ralation
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
        Schema::dropIfExists('guests');
    }
}
