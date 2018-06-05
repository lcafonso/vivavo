<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrandmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grandmas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('local_id')->unsigned();

            $table->string('name');
            $table->string('slug')->unique();

            $table->mediumText('excerpt')->nullable();

            $table->string('file')->nullable();

            $table->timestamps();

            //Relations
            $table->foreign('local_id')->references('id')->on('locals');
            //    ->onDelete()
            //    ->onUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grandmas');
    }
}
