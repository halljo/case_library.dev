@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>Enter New Case</h1>	
	</div>

	<div class="row">
		<form method="POST" action="/cards/{{ $hospital->id }}/store" class="col s12">
			{{ csrf_field() }}
			<div class="row">
				<div class="input-field col s6">
					<input name="case_description" type="text" class="validate">
					<label for="case_description">Case Title</label>
					<!-- Case Title needs to be added to the database -->
				</div>
				<div class="input-field col s6">
					<input placeholder="{{ $hospital->hospital_name }}"  type="text" class="validate">
					<label for="{{ $hospital->id }}"></label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s3">
					<input name="case_date" type="date" class="datepicker">
					<label for="case_date">Date</label>
				</div>
				<div class="input-field col s9">
					<select name="modality">
						<option value="" disabled selected>Modality</option>
						<option value="XR">Plain Radiography</option>
						<option value="CT">Computed Radiography</option>
						<option value="MR">Magnetic Resonance Imaging</option>
						<option value="NM">Nuclear Medicine</option>
						<option value="US">Ultrasound</option>
						<option value="XA">Digital Subtraction Angiography</option>
					</select>
					<label>Primary Modality for Case</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<textarea name="case_notes" class="materialize-textarea" length="120"></textarea>
					<label for="case_notes">Case Notes</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<textarea name="teaching_point" class="materialize-textarea" length="120"></textarea>
					<label for="teaching_point">Teaching Point</label>
				</div>
			</div>
			<button class="btn waves-effect waves-light" type="submit">Submit
				<i class="material-icons right">send</i>
			</button>
		</form>
	</div>
@endsection()