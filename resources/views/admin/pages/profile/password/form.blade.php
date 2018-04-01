<div class="row">

	
	<div class="col-xs-12">
		<div class="form-group">
			<p><strong>ახალი პაროლი : </strong></p>
			<p>
				{!! Form::password('password', null, ['class' => 'form-control']) !!}
			</p>
		</div>
	</div>

	<div class="col-xs-12">
		<div class="form-group">
			<p><strong>გაიმეორეთ ახალი პაროლი : </strong></p>
			<p>
				{!! Form::password('repassword', null, ['class' => 'form-control']) !!}
			</p>
		</div>
	</div>
	


	<div class="col-xs-12">
		<a class="btn btn-sm btn-info" href="{{ route('profile.index') }}">გაუქმება</a>
		<button type="submit" name="button" class="btn btn-sm btn-success">შენახვა</button>
	</div>
</div>
