@extends('layouts.app')

@section('content')

	<h1>Hospitals</h1>
	
	@foreach ($hospitals as $hospital)
	
		<div>
			{{ $hospital->hospital_name }} 
	
			<p>{{$hospital}}</p>
			
		</div>
	@endforeach

@endsection