<?php

namespace App\Http\Controllers;

use App\Card;
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
}

