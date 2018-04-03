@extends('layouts')
@section('content')

<div align="center">
	<div style="width: 600px; height: 120px; background-color:pink; margin: 100px; padding: 40px;">
		{{$answer}}
	</div>
</div>

<?php session([
	'programing' => 0, 
	'design' => 0, 
	'question' => 0,
	'dresult' => 0, 
	'presult' =>0]); ?>

<form action="{{ url('/') }}" method="post">
	<div align="center">
		<input name="value" type="submit" value="ხელახლა ცდა" class="btn btn-lg btn-success yes" style="width: 200px;height: 100px; margin: 50px;">
	</div>
</form>



@endsection