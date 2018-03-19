@extends('admin.pages.layout')

@section('content')
<section id="main-content" style="padding-left:30px;">
	<section class="wrapper">

		<div class="row" style="padding-bottom:20px;">
			<div class="col-lg-12">
				<h3 class="page-header"><i class="fa fa-file-text-o"></i> ახალი კითხვის დამატება</h3>
				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="{{url('/admin/dashboard')}}">მთავარი</a></li>
					<li><i class="icon_table"></i>ცხრილები</li>
					<li><i class="fa fa-th-list"></i>პროგრამირება</li>
				</ol>
			</div>
		</div>


		
		@if(count($errors) > 0)
		<div class="alert alert-danger">
			<strong>უუუუპს!!! </strong>აქ რაღაც პრობლემაა...<br>
			<ul>
				@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif


		{!! Form::open(['route' => 'programming.store']) !!}
		@include('admin.questions.programming.form')
		{!! Form::close() !!}

	</section>
</section>
@endsection