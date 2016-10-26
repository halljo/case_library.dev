<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CasesController extends Controller
{
    public function index()
    {
    	return view('cases.index');
    }
}
