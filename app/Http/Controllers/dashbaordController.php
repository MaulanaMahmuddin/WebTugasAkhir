<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashbaordController extends Controller
{
    public function index(){
        return view('data.dashboard');
    }
}
