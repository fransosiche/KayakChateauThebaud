<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function MeetingDisplay()
    {
        return view('AddMeetingReport.CompteRenduReunion');
    }

    public function AjoutCompteRendu()
    {

    }
}
