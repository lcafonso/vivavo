<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('grandma_id')->unsigned();

            $table->string('name');
            $table->string('slug')->unique();

            $table->dateTime('data_time');
            $table->string('local');

            $table->mediumText('excerpt')->nullable();
            $table->text('body');

            $table->string('file')->nullable();

            $table->timestamps();

            //Ralation
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
        Schema::dropIfExists('events');
    }
}
