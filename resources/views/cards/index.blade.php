@extends('layouts.app')

@section('content')

	<h1>My Cases</h1>

	@foreach ($cards as $card)

		<div>
			<a href="/cards/{{ $card->id }}"> {{ $card->case_description }} </a>
		</div>

	@endforeach

@stop
