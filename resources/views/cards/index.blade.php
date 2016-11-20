@extends('layouts.app')

@section('content')

	<h1>My Cases</h1>

	@foreach ($cards as $card)

		<div>
			{{ $card->case_description }}
		</div>

	@endforeach

@stop
