@extends('layouts.app')

@section('content')

	<h1>Hospitals</h1>
	
	@foreach ($hospitals as $hospital)
	
		<div>
			<a href="/hospitals/{{ $hospital->id }}"> {{ $hospital->hospital_name }} </a>
	
			<p>{{$hospital}}</p>

		</div>
	@endforeach

@endsection