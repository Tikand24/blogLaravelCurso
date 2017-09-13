@extends('admin.template.main')
@section('title','Crear usuario')
@section('content')
<div class="container">
@if (count($errors)>0)
<div class="alert alert-danger" role="alert">
@foreach ($errors->all() as $error)
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  {{ $error }}
  <br>
	@endforeach
</div>

@endif
	<div class="row">
		{!! Form::open(['route' => 'users.store']) !!}
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="form-group">
				{!! Form::label('nombreUsuario','Nombre del usuario') !!}
				{!! Form::text('nombreUsuario',null,['class'=>'form-control','placeholder'=>'Ej: Jonatan Villalobos Guchuvo', 'required']) !!}
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="form-group">
				{!! Form::label('emailUsuario','Correo electronico') !!}
				{!! Form::email('emailUsuario',null,['class'=>'form-control','placeholder'=>'Ej: tikand24@gmail.com', 'required']) !!}
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="form-group">
				{!! Form::label('password','Contraseña') !!}
				{!! Form::password('password',['class'=>'form-control','required']) !!}
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="form-group">
				{!! Form::label('passRepeat','Repetir contraseña') !!}
				{!! Form::password('passRepeat',['class'=>'form-control','required']) !!}
			</div>
		</div>
		<div class="col-xs-12 ">
			<div class="form-group">
				{!! Form::label('tipoMiembro','Tipo de miembro') !!}
				{!! Form::select('tipoMiembro', $miembros, null, ['placeholder' => 'Seleccione un tipo de usuario','class'=>'form-control']) !!}
			</div>
		</div>
		<div class="col-xs-12 ">
			<div class="form-group">
				{!! Form::submit('Enviar',['class' =>'btn btn-primary']); !!}
			</div>
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection