@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="divider"></div>
		<div class="section">
			<h5>User Name: </h5>
			<p>{{ $card->user_id }}</p>
		</div>
		<div class="divider"></div>
		<div class="section">
			<h5>Case Id: </h5>
			<p>{{ $card->id }}</p>
		</div>
		<div class="divider"></div>
		<div class="section">
			<h5>Case Description</h5>
			<p>{{ $card->case_description }}</p>
		</div>
		<div class="divider"></div>
		<div class="section">
			<h5>Case Date </h5>
			<p>{{ $card->case_date }}</p>
		</div>
		<div class="divider"></div>
		<div class="section">
			<h5>Case Notes </h5>
			<p>{{ $card->case_notes}}</p>
		</div>
		<div class="divider"></div>
		<div class="section">
			<h5>Teaching Points </h5>
			<p>{{ $card->teaching_points }}</p>
		</div>
	</div>

@endsection