@extends('admin.pages.layout')     
@section('content')
<section id="main-content" style="padding-left:30px;">
	<section class="wrapper">


		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header"><i class="fa fa-home"></i> მთავარი</h3>
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="index.html">მთავარი</a></li>

				</ol>
			</div>
		</div>


		<div class="row">
			<!-- chart morris start -->
			<div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading">
						<a href="">
							<h3>დიაგრამები</h3>
						</a>
					</header>
				</section>
			</div>
		</div>


		<div class="app">
			<center>
				{!! $chart1->html() !!}
			</center>
		</div>
		<!-- End Of Main Application -->
		{!! Charts::scripts() !!}
		{!! $chart1->script() !!}

		<br>
		<br>

		<div class="row">
			<!-- chart morris start -->
			<div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading">
						<a href="">
							<h3>ცხრილი</h3>
						</a>
					</header>
				</section>
			</div>
		</div>

		
		<table class="table table-bordered colorfortable">
			<tr>
				<th width="50px">No.</th>
				<th>კითხვა</th>
				<th>მიმართულება</th>
				<th>ტიპი</th>
				<th>ქულა</th>
				<th width="300px">მოქმედებები</th>
			</tr>
			<?php $i=0;?>
			@foreach($question as $value)
			<tr>
				<td>{{ ++$i }}</td>
				<td>{{ $value->question }}</td>
				<td>{{ $value->subject }}</td>
				<td>{{ $value->type }}</td>
				<td>{{ $value->value }}</td>
				<td>
					<a class="btn btn-xs btn-info" href="{{ route('questions.show', $value->id) }}">ნახვა</a>
					<a class="btn btn-xs btn-primary" href="{{ route('questions.edit', $value->id) }}">რედაქტირება</a>

					{!! Form::open(['method'=> 'DELETE', 'route' => ['questions.destroy', $value->id], 'style' => 'display:inline']) !!}
					{!! Form::submit('წაშლა', ['class' => 'btn btn-xs btn-danger']) !!}
					{!! Form::close() !!}


				</td>
			</tr>
			@endforeach
		</table>
		{!! $question->links() !!}
		

	</section>
</section>

@endsection