<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('houseid');
            $table->string('city');
            $table->string('numberofroom');
            $table->string('numberofsaloons');
            $table->string('numberoftb');
            $table->string('numberofkitchen');
            $table->string('extrahouses');
            $table->string('houselocation');
            $table->string('price');
            $table->string('housedescription');
            $table->string('houseimage');
            $table->string('saloonimage');
            $table->string('roomimage');
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
        Schema::dropIfExists('houses');
    }
}
