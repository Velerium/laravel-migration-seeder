<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class HomeController extends Controller

{
    public function viewMovies () {
        
        $tripList = Trip::all();
        return view('home', compact('tripList'));
        
    }
}
