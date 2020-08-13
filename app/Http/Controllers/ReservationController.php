<?php

namespace App\Http\Controllers;

use App\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function ReservationDisplay()
    {
        return view('Reservation');
    }

    public function OneHourDislay()
    {
        return view('Reservations/Reservation-1H');
    }

    public function StoreReservation()
    {
        $New_reservation = new reservation();

        $New_reservation->Surname = $_POST['fsurname'];
        $New_reservation->Name = $_POST['fname'];
        $New_reservation->Email = $_POST['mail'];
        $New_reservation->Address = $_POST['adresse'];
        $New_reservation->Phone = $_POST['phone'];
        $New_reservation->Location_Date = $_POST['jour'];
        $Duration = $_POST['slct'];
        $Explode = explode("|", $Duration);
        $New_reservation->Start_Time = $Explode[0];
        $New_reservation->End_Time = $Explode[1];
        $New_reservation->Start_Time_Date = $_POST['jour'] . " " . $Explode[0];
        $New_reservation->End_Time_Date = $_POST['jour'] . " " . $Explode[1];
        $New_reservation->save();

        $ID_Taken_Boat = DB::select(DB::raw("SELECT reservation_kayak.ID_Kayak FROM reservation_kayak, reservations WHERE
        (reservations.Start_Time_Date BETWEEN reservation_kayak.Start_Time AND reservation_kayak.End_Time) AND reservations.id ='$New_reservation->id'"));
        dd($ID_Taken_Boat);

        $Count = 0;
        foreach ($ID_Taken_Boat as $key) {
            if (DB::table('canoe_kayaks')->where('Type', '=', 'Kayak')->where('PlaceInBoat', '=', '1')
                    ->where('id', '=', $key->ID_Kayak)->get() != null) {
                $Count = $Count + 1;
            }
        }

        $KayakOnePlaceInDB = DB::table('canoe_kayaks')->where('Type', '=', 'Kayak')->where('PlaceInBoat', '=', '1')->get()->count();

        $KayakOnePlaceAvailable = $KayakOnePlaceInDB - $Count;

        $Count = 0;
        foreach ($ID_Taken_Boat as $key) {
            if (DB::table('canoe_kayaks')->where('Type', '=', 'Kayak')->where('PlaceInBoat', '=', '2')
                    ->where('id', '=', $key->ID_Kayak)->get() != null) {
                $Count = $Count + 1;
            }
        }

        $KayakTwoPlacesInDB = DB::table('canoe_kayaks')->where('Type', '=', 'Kayak')->where('PlaceInBoat', '=', '2')->get()->count();

        $KayakTwoPlaceAvailable = $KayakTwoPlacesInDB - $Count;


        $Count = 0;
        foreach ($ID_Taken_Boat as $key) {
            if (DB::table('canoe_kayaks')->where('Type', '=', 'Canoe')->where('PlaceInBoat', '=', '2')
                    ->where('id', '=', $key->ID_Kayak)->get() != null) {
                $Count = $Count + 1;
            }
        }

        $CanoeTwoPlacesInDB = DB::table('canoe_kayaks')->where('Type', '=', 'Canoe')->where('PlaceInBoat', '=', '2')->get()->count();

        $CanoeTwoPlaceAvailable = $CanoeTwoPlacesInDB - $Count;


        $Count = 0;
        foreach ($ID_Taken_Boat as $key) {
            if (DB::table('canoe_kayaks')->where('Type', '=', 'Canoe')->where('PlaceInBoat', '=', '4')
                    ->where('id', '=', $key->ID_Kayak)->get() != null) {
                $Count = $Count + 1;
            }
        }

        $CanoeFoursPlacesInDB = DB::table('canoe_kayaks')->where('Type', '=', 'Canoe')->where('PlaceInBoat', '=', '4')->get()->count();

        $CanoeFoursPlaceAvailable = $CanoeFoursPlacesInDB - $Count;


        return view('/Reservations/Canoe-Kayak-Reservation', compact('KayakOnePlaceAvailable', 'KayakTwoPlaceAvailable', 'CanoeTwoPlaceAvailable', 'CanoeFoursPlaceAvailable'));
    }


    public function TwoHoursDisplay()
    {
        return view('Reservations/Reservation-2H');
    }

    public function FoursHoursDisplay()
    {
        return view('Reservations/Reservation-4H');
    }

    public function HeightHoursDisplay()
    {
        return view('Reservations/Reservation-DemiJournee');
    }

    public function WeekdEndDislay()
    {
        return view('');
    }
}

