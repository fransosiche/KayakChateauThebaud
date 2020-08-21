<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminDisplay($DATE)
    {
        if (Auth::user() == null || Auth::user()->is_admin != 1) {
            return redirect('/');
        } else {
            $data = DB::table('reservations')->where('Location_Date', $DATE)->get();

            return view('Admin/Admin', compact('data'));
        }
    }

    public function PRINT($DATE)
    {
        if (Auth::user() == null || Auth::user()->is_admin != 1) {
            return redirect('/');
        } else {
            $data = [
                'data' => DB::table('reservations')->where('Location_Date', $DATE)->get()
            ];

            $pdf = PDF::loadView('Admin/PdfView', $data);
            $myDateTime = DateTime::createFromFormat('Y-m-d', $DATE)->format('d-m-Y');
            return $pdf->download('Location-' . $myDateTime . '.pdf');
        }
    }

    public function AdminChangeDate(Request $request)
    {
        $DATE = $request->input('jour');

        return redirect('/Admin/' . $DATE);
    }
}
