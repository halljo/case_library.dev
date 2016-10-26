@extends('layouts.app')

@section('content')
	
	<h1>All Cases</h1>

	@foreach ($cases as $case)
		
		<div>
			
		{{ $case->title }}

		</div>


	@endforeach

@endsection