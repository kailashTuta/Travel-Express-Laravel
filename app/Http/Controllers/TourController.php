<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourController extends Controller
{
    function index()
    {
        $tours = \App\Models\Tour::all();
        return view('layouts.user.tours',compact('tours'));
    }
}
