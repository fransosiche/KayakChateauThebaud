<?php

namespace App\Http\Controllers;

use App\post;
use App\reunion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MeetingController extends Controller
{
    public function MeetingDisplay()
    {
        if (Auth::user() == null || Auth::user()->is_admin != 1) {
            return redirect('/');
        } else {
            $data = DB::table('reunions')->get();
            return view('AddMeetingReport.CompteRenduReunion', compact('data'));
        }
    }

    public function AjoutCompteRendu()
    {
        return view('AddMeetingReport.AddReunionReport');
    }

    public function StoreReunions()
    {
        if (Auth::user() == null || Auth::user()->is_admin != 1) {
            return redirect('/');
        } else {
            if (!empty($_POST)) {
                try {
                    request()->validate([
                        "pdf" => "required|mimes:pdf|max:10000"
                    ]);

                    $pdfname = time() . '1' . '.' . request()->pdf->getClientOriginalExtension();
                    request()->pdf->move(public_path('pdf'), $pdfname);

                    $New_Reunion = new reunion();
                    $New_Reunion->Title = $_POST['Reunion'];
                    $New_Reunion->URL_TO_PDF = $pdfname;
                    $New_Reunion->save();

                } catch (Exception $e) {
                    echo $e->getMessage();
                }

            } else {
                return redirect('/');
            }
            toastr()->success('Compte rendu ajouté ! ');

            return redirect('/');
        }
    }
}
