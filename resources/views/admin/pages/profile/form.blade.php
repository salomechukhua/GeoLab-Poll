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

	<div class="col-xs-12">
		<div class="form-group">
			<strong>Image : </strong>
			{!! Form::file('image', null) !!}
		</div>
	</div>

	


	<div class="col-xs-12">
		<a class="btn btn-xs btn-success" href="{{ route('profile.index') }}">Back</a>
		<button type="submit" name="button" class="btn btn-xs btn-primary">Submit</button>
	</div>
</div>
