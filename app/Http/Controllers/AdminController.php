<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

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
        // This  $data array will be passed to our PDF blade
        #$data = DB::table('reservations')->where('Location_Date', $DATE)->get();
        $data = [
            'data' => DB::table('reservations')->where('Location_Date', $DATE)->get()
        ];

        $pdf = PDF::loadView('Admin/PdfView', $data);
        return $pdf->download('Location' . $DATE . '.pdf');
    }
}
