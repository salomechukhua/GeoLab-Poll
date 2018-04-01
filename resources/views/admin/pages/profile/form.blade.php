<div class="row">

	<div class="col-xs-12">
		<div class="form-group">
			<strong>სახელი : </strong>
			{!! Form::text('name', null, ['placeholder' => 'სახელი', 'class' => 'form-control']) !!}
		</div>
	</div>

	<div class="col-xs-12">
		<div class="form-group">
			<strong>მეილი : </strong>
			{!! Form::text('email', null, ['placeholder' => 'მეილი', 'class' => 'form-control']) !!}
		</div>
	</div>

	<!-- <div class="col-xs-12">
		<div class="form-group">
			<strong>Image : </strong>
			{!! Form::file('image', null) !!}
		</div>
	</div> -->

	


	<div class="col-xs-12">
		<a class="btn btn-sm btn-info" href="{{ route('profile.index') }}">გაუქმება</a>
		<button type="submit" name="button" class="btn btn-sm btn-success">შენახვა</button>
	</div>
</div>
