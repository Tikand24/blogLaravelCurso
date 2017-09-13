@extends('admin.template.main')
@section('title','Editar usuario')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route' => ['users.update',$user->id],'method'=>'PUT']) !!}
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="form-group">
				{!! Form::label('nombreUsuario','Nombre del usuario') !!}
				{!! Form::text('nombreUsuario',$user->name,['class'=>'form-control','placeholder'=>'Ej: Jonatan Villalobos Guchuvo', 'required']) !!}
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6">
			<div class="form-group">
				{!! Form::label('emailUsuario','Correo electronico') !!}
				{!! Form::email('emailUsuario',$user->email,['class'=>'form-control','placeholder'=>'Ej: tikand24@gmail.com', 'required']) !!}
			</div>
		</div>
		<div class="col-xs-12 ">
			<div class="form-group">
				{!! Form::label('tipoMiembro','Tipo de miembro') !!}
				{!! Form::select('tipoMiembro', $miembros, $user->type, ['placeholder' => 'Seleccione un tipo de usuario','class'=>'form-control']) !!}
			</div>
		</div>
		<div class="col-xs-12 ">
			<div class="form-group">
				{!! Form::submit('Actualizar',['class' =>'btn btn-primary']); !!}
			</div>
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection