<div class="row">



	<div class="col-xs-12">
		<div class="form-group">
			<p>
				<strong>ფოტოს ატვირთვა: </strong>
			</p>
			<br>
			{!! Form::file('image', null) !!}
		</div>
	</div>

	


	<div class="col-xs-12">
		<a class="btn btn-sm btn-info" href="{{ route('profile.index') }}">გაუქმება</a>
		<button type="submit" name="button" class="btn btn-sm btn-success">შენახვა</button>
	</div>
</div>
