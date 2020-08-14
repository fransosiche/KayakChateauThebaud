<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationKayakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_kayaks', function (Blueprint $table) {
            $table->id();
            $table->DateTime('Start_Time');
            $table->DateTime('End_Time');
            $table->integer('ID_Kayak');
            $table->integer('ID_Reservation');
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
        Schema::dropIfExists('reservation_kayak');
    }
}
