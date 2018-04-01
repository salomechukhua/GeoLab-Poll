<div class="row">

	<div class="col-xs-12">
		<div class="form-group">
			<p><strong>მიმდინარე პაროლი : </strong></p>
			<p>
				{!! Form::password('oldpassword', null, ['placeholder' => 'პაროლი', 'class' => 'form-control']) !!}
			</p>
		</div>
	</div>

	<div class="col-xs-12">
		<div class="form-group">
			<p><strong>ახალი პაროლი : </strong></p>
			<p>
				{!! Form::password('password', null, ['placeholder' => 'პაროლი', 'class' => 'form-control']) !!}
			</p>
		</div>
	</div>

	<div class="col-xs-12">
		<div class="form-group">
			<p><strong>გაიმეორეთ ახალი პაროლი : </strong></p>
			<p>
				{!! Form::password('repassword', null, ['placeholder' => 'გაიმეორეთ პაროლი', 'class' => 'form-control']) !!}
			</p>
		</div>
	</div>
	


	<div class="col-xs-12">
		<a class="btn btn-xs btn-info" href="{{ route('profile.index') }}">გაუქმება</a>
		<button type="submit" name="button" class="btn btn-xs btn-success">შენახვა</button>
	</div>
</div>
