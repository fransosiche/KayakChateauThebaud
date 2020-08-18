<?php

namespace App\Http\Controllers;

use App\canoe_kayak;
use App\Mail\ReservationALCKCT;
use App\Mail\ReservationToCust;
use App\reservation;
use App\reservation_kayak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{

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

        $ID_Taken_Boat = DB::select(DB::raw("SELECT reservation_kayaks.ID_Kayak FROM reservation_kayaks, reservations WHERE
        (reservations.Start_Time_Date BETWEEN reservation_kayaks.Start_Time AND reservation_kayaks.End_Time) AND reservations.id ='$New_reservation->id'"));

        $Count = 0;
        foreach ($ID_Taken_Boat as $key) {
            $result = DB::table('canoe_kayaks')->where('Type', '=', 'Kayak')->where('PlaceInBoat', '=', '1')
                ->where('id', '=', $key->ID_Kayak)->get();
            if ($result->isEmpty()) {
            } else {
                $Count = $Count + 1;
            }
        }
        $KayakOnePlaceInDB = DB::table('canoe_kayaks')->where('Type', '=', 'Kayak')->where('PlaceInBoat', '=', '1')->get()->count();
        $KayakOnePlaceAvailable = $KayakOnePlaceInDB - $Count;


        $Count = 0;
        foreach ($ID_Taken_Boat as $key) {
            $result = DB::table('canoe_kayaks')->where('Type', '=', 'Kayak')->where('PlaceInBoat', '=', '2')
                ->where('id', '=', $key->ID_Kayak)->get();
            if ($result->isEmpty()) {
            } else {
                $Count = $Count + 1;
            }
        }

        $KayakTwoPlacesInDB = DB::table('canoe_kayaks')->where('Type', '=', 'Kayak')->where('PlaceInBoat', '=', '2')->get()->count();

        $KayakTwoPlaceAvailable = $KayakTwoPlacesInDB - $Count;


        $Count = 0;
        foreach ($ID_Taken_Boat as $key) {
            $result = DB::table('canoe_kayaks')->where('Type', '=', 'Canoe')->where('PlaceInBoat', '=', '2')
                ->where('id', '=', $key->ID_Kayak)->get();
            if ($result->isEmpty()) {
            } else {
                $Count = $Count + 1;
            }
        }

        $CanoeTwoPlacesInDB = DB::table('canoe_kayaks')->where('Type', '=', 'Canoe')->where('PlaceInBoat', '=', '2')->get()->count();

        $CanoeTwoPlaceAvailable = $CanoeTwoPlacesInDB - $Count;


        $Count = 0;
        foreach ($ID_Taken_Boat as $key) {
            $result = DB::table('canoe_kayaks')->where('Type', '=', 'Canoe')->where('PlaceInBoat', '=', '4')
                ->where('id', '=', $key->ID_Kayak)->get();
            if ($result->isEmpty()) {
            } else {
                $Count = $Count + 1;
            }
        }

        $CanoeFoursPlacesInDB = DB::table('canoe_kayaks')->where('Type', '=', 'Canoe')->where('PlaceInBoat', '=', '4')->get()->count();

        $CanoeFoursPlaceAvailable = $CanoeFoursPlacesInDB - $Count;

        $Count = 0;
        foreach ($ID_Taken_Boat as $key) {
            $result = DB::table('canoe_kayaks')->where('Type', '=', 'Paddle')->where('PlaceInBoat', '=', '1')
                ->where('id', '=', $key->ID_Kayak)->get();
            if ($result->isEmpty()) {
            } else {
                $Count = $Count + 1;
            }
        }

        $PaddleInDB = DB::table('canoe_kayaks')->where('Type', '=', 'Paddle')->where('PlaceInBoat', '=', '1')->get()->count();

        $PaddleAvailable = $PaddleInDB - $Count;

        $id = $New_reservation->id;

        return view('/Reservations/Canoe-Kayak-Reservation', compact('KayakOnePlaceAvailable', 'KayakTwoPlaceAvailable',
            'CanoeTwoPlaceAvailable', 'CanoeFoursPlaceAvailable', 'PaddleAvailable', 'id'));
    }


    public function ReservationBoat($id)
    {
        $KayakOnePlace = $_POST['KayakOnePlace'];
        $KayakTwoPlace = $_POST['KayakTwoPlace'];
        $CanoeTwoPlace = $_POST['CanoeTwoPlace'];
        $CanoeFoursPlace = $_POST['CanoeFoursPlace'];
        $Paddle = $_POST['Paddle'];

        DB::table('reservations')->where('id', $id)
            ->update(['Kayak1place' => $KayakOnePlace,
                'Kayak2Place' => $KayakTwoPlace,
                'Canoe2Place' => $CanoeTwoPlace,
                'Canoe4Place' => $CanoeFoursPlace,
                'Paddle' => $Paddle,
            ]);

        $data = DB::table('reservations')->where('id', $id)->get();
        $Start_Time_Date = $data[0]->Start_Time_Date;
        $End_Time_Date = $data[0]->End_Time_Date;

        $count = DB::table('reservation_kayaks')->count();

        if ($count == 0) {
            $ID_Kayak_One_Place_Available = DB::table('canoe_kayaks')->where('PlaceInBoat', '=', 1)
                ->where('Type', '=', 'Kayak')->get();
            $ID_Kayak_Two_Place_Available = DB::table('canoe_kayaks')->where('PlaceInBoat', '=', 2)
                ->where('Type', '=', 'Kayak')->get();
            $ID_Canoe_Two_Place_Available = DB::table('canoe_kayaks')->where('PlaceInBoat', '=', 2)
                ->where('Type', '=', 'Canoe')->get();
            $ID_Canoe_Four_Place_Available = DB::table('canoe_kayaks')->where('PlaceInBoat', '=', 4)
                ->where('Type', '=', 'Canoe')->get();
            $ID_Paddle_Available = DB::table('canoe_kayaks')->where('PlaceInBoat', '=', 1)
                ->where('Type', '=', 'Paddle')->get();

        } else {

            $ID_Kayak_One_Place_Available = DB::select(DB::raw("SELECT canoe_kayaks.id FROM (SELECT reservation_kayaks.ID_Kayak FROM reservation_kayaks,
            reservations WHERE (reservations.Start_Time_Date BETWEEN reservation_kayaks.Start_Time
            AND reservation_kayaks.End_Time) AND reservations.id = '$id') as t1 RIGHT OUTER JOIN canoe_kayaks
            ON T1.ID_Kayak = canoe_kayaks.id WHERE T1.ID_Kayak IS NULL AND canoe_kayaks.Type = 'Kayak' AND
            canoe_kayaks.PlaceInBoat = 1"));

            $ID_Kayak_Two_Place_Available = DB::select(DB::raw("SELECT canoe_kayaks.id FROM (SELECT reservation_kayaks.ID_Kayak FROM reservation_kayaks,
            reservations WHERE (reservations.Start_Time_Date BETWEEN reservation_kayaks.Start_Time
            AND reservation_kayaks.End_Time) AND reservations.id = '$id') as t1 RIGHT OUTER JOIN canoe_kayaks
            ON T1.ID_Kayak = canoe_kayaks.id WHERE T1.ID_Kayak IS NULL AND canoe_kayaks.Type = 'Kayak' AND
            canoe_kayaks.PlaceInBoat = 2"));

            $ID_Canoe_Two_Place_Available = DB::select(DB::raw("SELECT canoe_kayaks.id FROM (SELECT reservation_kayaks.ID_Kayak FROM reservation_kayaks,
            reservations WHERE (reservations.Start_Time_Date BETWEEN reservation_kayaks.Start_Time
            AND reservation_kayaks.End_Time) AND reservations.id = '$id') as t1 RIGHT OUTER JOIN canoe_kayaks
            ON T1.ID_Kayak = canoe_kayaks.id WHERE T1.ID_Kayak IS NULL AND canoe_kayaks.Type = 'Canoe' AND
            canoe_kayaks.PlaceInBoat = 2"));

            $ID_Canoe_Four_Place_Available = DB::select(DB::raw("SELECT canoe_kayaks.id FROM (SELECT reservation_kayaks.ID_Kayak FROM reservation_kayaks,
            reservations WHERE (reservations.Start_Time_Date BETWEEN reservation_kayaks.Start_Time
            AND reservation_kayaks.End_Time) AND reservations.id = '$id') as t1 RIGHT OUTER JOIN canoe_kayaks
            ON T1.ID_Kayak = canoe_kayaks.id WHERE T1.ID_Kayak IS NULL AND canoe_kayaks.Type = 'Canoe' AND
            canoe_kayaks.PlaceInBoat = 4"));

            $ID_Paddle_Available = DB::select(DB::raw("SELECT canoe_kayaks.id FROM (SELECT reservation_kayaks.ID_Kayak FROM reservation_kayaks,
            reservations WHERE (reservations.Start_Time_Date BETWEEN reservation_kayaks.Start_Time
            AND reservation_kayaks.End_Time) AND reservations.id = '$id') as t1 RIGHT OUTER JOIN canoe_kayaks
            ON T1.ID_Kayak = canoe_kayaks.id WHERE T1.ID_Kayak IS NULL AND canoe_kayaks.Type = 'Paddle' AND
            canoe_kayaks.PlaceInBoat = 1"));

        }

        for ($i = 1; $i <= $KayakOnePlace; $i++) {
            $New_reservation_kayak = new reservation_kayak();
            $New_reservation_kayak->Start_Time = $Start_Time_Date;
            $New_reservation_kayak->End_Time = $End_Time_Date;
            $New_reservation_kayak->ID_Reservation = $id;
            $New_reservation_kayak->ID_Kayak = $ID_Kayak_One_Place_Available[$i - 1]->id;
            $New_reservation_kayak->save();
        }

        for ($i = 1; $i <= $KayakTwoPlace; $i++) {
            $New_reservation_kayak = new reservation_kayak();
            $New_reservation_kayak->Start_Time = $Start_Time_Date;
            $New_reservation_kayak->End_Time = $End_Time_Date;
            $New_reservation_kayak->ID_Reservation = $id;
            $New_reservation_kayak->ID_Kayak = $ID_Kayak_Two_Place_Available[$i - 1]->id;
            $New_reservation_kayak->save();
        }

        for ($i = 1; $i <= $CanoeTwoPlace; $i++) {
            $New_reservation_kayak = new reservation_kayak();
            $New_reservation_kayak->Start_Time = $Start_Time_Date;
            $New_reservation_kayak->End_Time = $End_Time_Date;
            $New_reservation_kayak->ID_Reservation = $id;
            $New_reservation_kayak->ID_Kayak = $ID_Canoe_Two_Place_Available[$i - 1]->id;
            $New_reservation_kayak->save();
        }
        for ($i = 1; $i <= $CanoeFoursPlace; $i++) {
            $New_reservation_kayak = new reservation_kayak();
            $New_reservation_kayak->Start_Time = $Start_Time_Date;
            $New_reservation_kayak->End_Time = $End_Time_Date;
            $New_reservation_kayak->ID_Reservation = $id;
            $New_reservation_kayak->ID_Kayak = $ID_Canoe_Four_Place_Available[$i - 1]->id;
            $New_reservation_kayak->save();
        }
        for ($i = 1; $i <= $Paddle; $i++) {
            $New_reservation_kayak = new reservation_kayak();
            $New_reservation_kayak->Start_Time = $Start_Time_Date;
            $New_reservation_kayak->End_Time = $End_Time_Date;
            $New_reservation_kayak->ID_Reservation = $id;
            $New_reservation_kayak->ID_Kayak = $ID_Paddle_Available[$i]->id;
            $New_reservation_kayak->save();
        }

        $data = DB::table('reservations')->where('id', $id)->get();

        Mail::to($data[0]->Email)->send(new ReservationToCust((array)$data[0]));
        Mail::to('fransosichewot@gmail.com')->send(new ReservationALCKCT((array)$data[0]));
        
        return redirect('/');
    }

    public function ReservationDisplay()
    {
        return view('Reservation');
    }

    public function OneHourDislay()
    {
        return view('Reservations/Reservation-1H');
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
        return view('Reservations/Reservation-Journee');
    }
}

