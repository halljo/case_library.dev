@extends('layouts.app')

@section('content')

	<h1>Current Hospital</h1>

	<h3>{{ $hospital -> hospital_name }}</h3>

	<table class="highlight">
		<thread>
			<tr>
				<th>Case ID</th>
				<th>Case Description</th>
				<th>Modality</th>
				<th>Case Date</th>
			</tr>
		</thread>
		<tbody>
			@foreach ($hospital->cards as $card)
				
				<tr>

					<td>{{ $card->id }}</td>
					<td><a href="/cards/{{ $card->id }}">{{ $card->case_description }}</a></td>
					<td>{{ $card->modality }}</td>
					<td>{{ $card->case_date }}</td>
				</tr>

			@endforeach
		</tbody>
	</table>

	<ul>



	</ul>

@endsection