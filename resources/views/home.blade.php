@extends('layouts')
@section('content')
<div class="container-fluid">
	<div class="container">

		<form action="{{ url('/') }}" method="get">
			<?php session([
				'first' => $first, 
				'second' => $second,
				'third' => $third,
				'quantityOfQuestions' => $quantityOfQuestions,
				'firstCourseResult' => $firstCourseResult, 
				'secondCourseResult' => $secondCourseResult,
				'thirdCourseResult' => $thirdCourseResult,
				'duration' => $duration, ]);
				?>
			<div align="center">
				<div style="width: 600px; height: 100px; background-color: 	#ccffff; margin: 100px; padding: 40px;">{{ $question->question }}</div>
			</div>
			<div align="center">
				<input name="value" type="submit" value="კი" class="btn btn-md btn-success yes" style="width: 100px; margin: 50px;">
				<input name="value" type="submit" value="არა" class="btn btn-md btn-danger no" style="width: 100px; margin: 50px;">
			</div>
		</form>
		first: {{$first}}
		second: {{$second}}
		third: {{$third}}
	</div>
</div>

 
@endsection