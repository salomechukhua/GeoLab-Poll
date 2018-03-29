@extends('admin.pages.layout')

@section('content')

@if(!isset($_FILES))
dd($_FILES);
@endif


<section id="main-content" style="padding-left:30px;">
	<section class="wrapper">

		<div class="row" style="padding-bottom:20px;">
			<div class="col-lg-12">
				<h3 class="page-header"><i class="fa fa-file-text-o"></i> კითხვების ცხრილი</h3>
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="{{url('/admin/dashboard')}}">მთავარი</a></li>
					<li><i class="icon_table"></i>ცხრილი</li>
				</ol>
			</div>
		</div>


		<div class="row">
			<div class="col-sm-12">
				<div class="full-right">
					<a class="btn btn-xs btn-success" href="{{ route('questions.create') }}">ახალი კითხვის დამატება</a>
				</div>
			</div>
		</div>


		@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>
				{{ $message }}
			</p>
		</div>

		@endif




		<table class="table table-bordered" style="background-color: white;">
			<tr>
				<th width="50px">No.</th>
				<th>კითხვა</th>
				<th>მიმართულება</th>
				<th>ტიპი</th>
				<th width="300px">მოქმედებები</th>
			</tr>
			<?php $i=0;?>
			@foreach($question as $value)
			<tr>
				<td>{{ ++$i }}</td>
				<td>{{ $value->question }}</td>
				<td>{{ $value->subject }}</td>
				<td>{{ $value->type }}</td>
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

	</section>
</section>
@endsection
