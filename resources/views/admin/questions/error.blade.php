@extends('admin.pages.layout')

@section('content')

@if(!isset($_FILES))
dd($_FILES);
@endif


<section id="main-content" style="padding-left:30px;">
	<section class="wrapper">
		<div>
			<p> ჩანაწერები ვერ მოიძებნა. </p>
		</div>
	</section>
</section>
@endsection