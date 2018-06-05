<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locals', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('district_id')->unsigned();

            $table->string('name');
            $table->string('slug')->unique();
            $table->mediumText('body')->nullable();

            $table->timestamps();

            //Relations
           
            $table->foreign('district_id')->references('id')->on('districts');
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
        Schema::dropIfExists('locals');
    }
}
