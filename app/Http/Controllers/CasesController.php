<?php

namespace App\Http\Controllers;

use App\Case;

use Illuminate\Http\Request;

use App\Http\Requests;

class CasesController extends Controller
{
    public function index()
    {
    	$cases = Case::all();

    	return view('cases.index', compact('cases'));
    }
}
