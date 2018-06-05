<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pois', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('local_id')->unsigned();

            $table->string('name');
            $table->string('slug')->unique();
            $table->mediumText('excerpt')->nullable();

            $table->string('latitude');
            $table->string('longitude');

            $table->string('icon')->nullable();
            $table->string('image')->nullable();

            $table->Text('body')->nullable();
            
            $table->timestamps();

            //Relations
            $table->foreign('local_id')->references('id')->on('locals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pois');
    }
}
