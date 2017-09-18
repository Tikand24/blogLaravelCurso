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
	<div class="row" id="vue">
		{!! Form::open(['route' => 'users.store']) !!}
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="form-group">
				<span v-bind:class="valid">{!! Form::label('nombreUsuario','Nombre del usuario ') !!}</span>
				<input class="form-control" placeholder="Ej: Jonatan Villalobos Guchuvo" required="" name="nombreUsuario" type="text" id="nombreUsuario">
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
				<input type="submit" class="btn btn-primary" value="Enviar" v-on:click="validar">
			</div>
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection
@section('js')
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.0/vue.js"></script>
	<script type="text/javascript">
		var app = new Vue({
			el: '#vue',
			data:{
				valid:''
			},
			methods: {
				validar: function (event) {
					event.preventDefault;
					this.valid="red";
				}
			}
		});
	</script>
@endsection