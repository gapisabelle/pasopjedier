<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet', function (Blueprint $table) {
            $table->id();
            $table->string("naam");
            $table->string("soort")->references("soort")->on("kind_of_pet");
            $table->string("datum");
            $table->integer("uurtarief");
            $table->integer("aantal_dagen");
            $table->string("belangrijke_zaken");
            $table->string("image")->default("/img/pet_default.jpg");
            $table->unsignedBigInteger("owner")->nullable();
            $table->foreign('owner')->references('id')->on('users');
            $table->unsignedBigInteger("nanny")->nullable();
            $table->foreign('nanny')->references('id')->on('users');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pet');
    }
}
