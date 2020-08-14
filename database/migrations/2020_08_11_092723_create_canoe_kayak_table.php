<?php

use App\canoe_kayak;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCanoeKayakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canoe_kayaks', function (Blueprint $table) {
            $table->id();
            $table->text('Type');
            $table->integer('PlaceInBoat');
            $table->timestamps();
        });


        for ($i = 1; $i <= 24; $i++) {

            $New_Boat = new canoe_kayak();

            $New_Boat->Type="Kayak";
            $New_Boat->PlaceInBoat="1";
            $New_Boat->save();
        }

        for ($i = 1; $i <= 12; $i++) {

            $New_Boat = new canoe_kayak();

            $New_Boat->Type="Kayak";
            $New_Boat->PlaceInBoat="2";
            $New_Boat->save();
        }

        for ($i = 1; $i <= 3; $i++) {

            $New_Boat = new canoe_kayak();

            $New_Boat->Type="Canoe";
            $New_Boat->PlaceInBoat="2";
            $New_Boat->save();
        }

        for ($i = 1; $i <= 18; $i++) {

            $New_Boat = new canoe_kayak();

            $New_Boat->Type="Canoe";
            $New_Boat->PlaceInBoat="4";
            $New_Boat->save();
        }

        for ($i = 1; $i <= 8; $i++) {

            $New_Boat = new canoe_kayak();

            $New_Boat->Type="Paddle";
            $New_Boat->PlaceInBoat="1";
            $New_Boat->save();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('canoe_kayak');
    }
}
