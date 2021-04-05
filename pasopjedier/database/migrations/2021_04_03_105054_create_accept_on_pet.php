<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcceptOnPet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accept_on_pet', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pet')->nullable();
            $table->foreign('pet')->references('id')->on('pet')->onDelete('cascade');
            $table->unsignedBigInteger("nanny");
            $table->foreign('nanny')->references('id')->on('users');
            $table->unsignedBigInteger("owner");
            $table->foreign('owner')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accept_on_pet');
    }
}
