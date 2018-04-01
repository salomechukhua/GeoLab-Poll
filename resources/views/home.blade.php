@extends('layouts')
@section('content')
<div class="container-fluid">
	<div class="container">
		<div align="center">
			<?php $i=0; ?>
			<div style="width: 600px; height: 100px; background-color: 	#ccffff; margin: 100px; padding: 40px;">{{$question[$i]->question }}</div>
		</div>
		<div align="center">
			<button name="yes" onclick="myfunction()" class="btn btn-md btn-success yes" style="width: 100px; margin: 50px;">კი</button>
			<button name="no" onclick="myfunction()" class="btn btn-md btn-danger no" style="width: 100px; margin: 50px;">არა</button>
		</div>
		
	</div>

	
</div>


@endsection