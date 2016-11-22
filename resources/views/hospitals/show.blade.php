@extends('layouts.app')

@section('content')

	<h1>Current Hospital</h1>

	<h3>{{ $hospital -> hospital_name }}</h3>

	<ul>

		@foreach ($hospital->cards as $card)

			<a href="/cards/{{ $card->id }}"> <li>{{ $card->case_description }}</li></a>

		@endforeach

	</ul>

@endsection