<div class="form-group">
	{{ Form::label('name', 'Nombre del role') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('description', 'Descripción del role') }}
	{{ Form::text('description', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('description', 'Descripción del role') }}
	{{ Form::text('description', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">	
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btm-primary']) }}
</div>