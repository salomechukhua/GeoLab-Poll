<div class="row">
	<div class="col-xs-12">
		<div class="form-group">
			<p>
			<strong>კითხვა : </strong>
			</p>
			{!! Form::textarea('question', null, ['placeholder' => 'კითხვა', 'class' => 'form-control', 'style' => 'height: 40px; width: 700px;']) !!}
		</div>
	</div>
	<div class="col-xs-12">
		<div class="form-group">
			<p>
			<strong>თემა : </strong>
			</p>
			{!! Form::text('subject', null, ['placeholder' => 'თემა', 'class' => 'form-control', 'style' => 'height: 40px; width: 700px;']) !!}
		</div>
	</div>
	<div class="col-xs-12">
		<div class="form-group">
			<p>
			<strong>ტიპი : </strong>
			</p>
			{!! Form::text('type', null, ['placeholder' => 'ტიპი', 'class' => 'form-control', 'style' => 'height: 40px; width: 700px;']) !!}
		</div>
	</div>

	<div class="col-xs-12">
		<div class="form-group">
			<p>
			<strong>ქულა : </strong>
			</p>
			{!! Form::text('value', null, ['placeholder' => 'ქულა', 'class' => 'form-control', 'style' => 'height: 40px; width: 700px;']) !!}
		</div>
	</div>
	<div class="col-xs-12">
		<a class="btn btn-sm btn-info" href="{{ route('questions.index') }}">უკან</a>
		<button type="submit" name="button" class="btn btn-sm btn-success">დამატება</button>
	</div>
</div>