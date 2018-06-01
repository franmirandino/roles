<div class="form-group">
	{{ Form::label('Nombre', 'Nombre del usuario') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::label('Email', 'Descripción del usuario') }}
	{{ Form::text('email', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">	
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btm-primary']) }}
</div>