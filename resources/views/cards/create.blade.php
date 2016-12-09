@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>Enter New Case</h1>	
	</div>

	<div class="row">
		<form class="col s12">
			<div class="row">
				<div class="input-field col s6">
					<input name="case_title" type="text" class="validate">
					<label for="case_title">Case Title</label>
					<!-- Case Title needs to be added to the database -->
				</div>
				<div class="input-field col s6">
					<input placeholder="Hospital_id" name="Hospital_id" type="text" class="validate">
					<label for="hospital_name">Hospital Name</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s3">
					<input name="case_date" type="date" class="datepicker">
					<label for="case_date">Date</label>
				</div>
				<div class="input-field col s9">
					<select>
						<option value="" disabled selected>Choose your option</option>
						<option value="XR">Plain Radiography</option>
						<option value="CT">Computed Radiography</option>
						<option value="MR">Magnetic Resonance Imaging</option>
						<option value="NM">Nuclear Medicine</option>
						<option value="US">Ultrasound</option>
						<option value="XA">Digital Subtraction Angiography</option>
					</select>
					<label>Primary Modality of Interest</label>
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