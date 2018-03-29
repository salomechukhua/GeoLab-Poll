<div class="row">
	
	<div class="col-xs-12">
		<div class="form-group">
			<p>
			<strong>სახელი : </strong>
			</p>
			{!! Form::text('subject', null, ['placeholder' => 'სახელი', 'class' => 'form-control', 'style' => 'height: 40px; width: 700px;']) !!}
		</div>
	</div>
	<div class="col-xs-12">
		<div class="form-group">
			<p>
			<strong>მეილი: </strong>
			</p>
			{!! Form::text('type', null, ['placeholder' => 'მეილი', 'class' => 'form-control', 'style' => 'height: 40px; width: 700px;']) !!}
		</div>
	</div>

	<div class="col-xs-12">
		<div class="form-group">
			<strong>Image : </strong>
			{!! Form::file('image', null) !!}
		</div>
	</div>
	
	<div class="col-xs-12">
		<a class="btn btn-xs btn-success" href="{{ route('profile.index') }}">უკან</a>
		<button type="submit" name="button" class="btn btn-xs btn-primary">შენახვა</button>
	</div>
</div>