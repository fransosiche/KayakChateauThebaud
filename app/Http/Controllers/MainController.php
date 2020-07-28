<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function SlalomDisplay(){
        return view('slalom');
    }

    public function KayakPoloDisplay(){
        return view('kayakpolo');
    }
    public function EcoleDisplay(){
        return view('ecoledepagaie');
    }
}
