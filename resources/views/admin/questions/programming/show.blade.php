@extends('admin.pages.layout')

@section('content')
<section id="main-content" style="padding-left:30px;">
	<section class="wrapper">

		<div class="row" style="padding-bottom:20px;">
			<div class="col-lg-12">
				<h3 class="page-header"><i class="fa fa-file-text-o"></i> ნახვა</h3>

				<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="{{url('/admin/dashboard')}}">მთავარი</a></li>
					<li><i class="icon_table"></i>ცხრილები</li>
					<li><i class="fa fa-th-list"></i>პროგრამირება</li>
				</ol>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-15">
					<div class="pull-left">
						<p><a class="btn btn-xs btn-primary" href="{{ route('programming.index') }}">უკან</a></p>

					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row" style="background-color: white;">

				<div class="col-xs-12">
					<div class="form-group">
						<p><strong>კითხვა : </strong></p>
						{{ $question->question }}
					</div>
				</div>

				<div class="col-xs-12">
					<div class="form-group">
						<p><strong>თემა : </strong></p>
						{{ $question->subject }}
					</div>
				</div>

				<div class="col-xs-12">
					<div class="form-group">
						<p><strong>ტიპი : </strong></p>
						{{ $question->type }}
					</div>
				</div>
			</div>
		</div>
	</section>
</section>
@endsection