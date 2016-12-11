<?php

namespace App\Http\Controllers;

use App\Card;
use App\Hospital;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class CardsController extends Controller
{
	public function index()
	{
		$user = Auth::user();	
		$cards = $user->cards;

		return view ('cards.index', compact('cards'));
	
	}

	public function show(Card $card)
	{
		return view ('cards.show', compact('card'));
	}

	public function create(Hospital $hospital)
	{
		return view ('cards.create', compact('hospital'));
	}

	public function store(Request $request, Hospital $hospital)
	{
		$user = Auth::user();	

		$card = new Card;

		$card->hospital_id = $hospital->id;
		$card->user_id = $user->id;

		$card->case_description = $request->case_description;
		$card->case_date = $request->case_date;
		$card->modality = $request->modality;
		$card->case_notes = $request->case_notes;
		$card->teaching_point = $request->teaching_point;

		$hospital->cards()->save($card);

		return view ('cards.show', compact('card'));
	}
}

