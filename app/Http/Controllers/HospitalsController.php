<?php

namespace App\Http\Controllers;

use App\Hospital;

use Illuminate\Http\Request;

use App\Http\Requests;

class HospitalsController extends Controller
{
    public function index()

    {

    	$hospitals = Hospital::all();

    	return view ('hospitals.index', compact('hospitals'));

    }

    public function show(Hospital $hospital)

    {

    	return view ('hospitals.show', compact('hospital'));

    }
}
