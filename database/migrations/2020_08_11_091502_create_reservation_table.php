<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Surname');
            $table->string('Email');
            $table->string('Address');
            $table->string('Phone');
            $table->integer('Kayak1Place')->default('0');
            $table->integer('Kayak2Place')->default('0');
            $table->integer('Canoe2Place')->default('0');
            $table->integer('Canoe4Place')->default('0');
            $table->integer('Paddle')->default('0');
            $table->Date('Location_Date');
            $table->DateTime('Start_Time_Date');
            $table->DateTime('End_Time_Date');
            $table->string('Start_Time');
            $table->string('End_Time');
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
        Schema::dropIfExists('reservation');
    }
}
