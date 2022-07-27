<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DasboardKasirController extends Controller
{
    public function indexKasir(){
        return view('data.dashboardKasir');
    }
}
