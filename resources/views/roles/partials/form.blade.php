<div class="form-group">
	{{ Form::label('name', 'Nombre') }}
	{{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('slug', 'URL Amigable') }}
	{{ Form::text('slug', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('description', 'Descripción') }}
	{{ Form::textarea('description', null, ['class' => 'form-control']) }}
</div>
<hr>

<h3>Permiso especial</h3>
<div class="form-group">
	<label>{{ form::radio('special', 'all-access') }} Acceso Total</label>
	<label>{{ form::radio('special', 'no-access') }} Ningún acceso</label>
</div>

<h3>Lista de permisos</h3>

<div class="form-group">
	<ul class="list-unstyled">
		@foreach($permissions as $permission)
			<li>
				<label>
					{{ form::checkbox('permissions[]', $permission->id, null) }}
						{{ $permission->name }}
						<em>({{ $permission->description ?: 'Sin descripción' }})</em>					
				</label>
			</li>
		@endforeach
	</ul>
</div>

<div class="form-group">	
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btm-primary']) }}
</div>