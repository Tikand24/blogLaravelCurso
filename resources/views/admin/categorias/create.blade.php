@extends('admin.template.main')
@section('title','Crear categoria')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route' => 'categorias.store']) !!}
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				{!! Form::label('categoria','Nombre de la categoria') !!}
				{!! Form::text('categoria',null,['class'=>'form-control','placeholder'=>'Ej: Noticas', 'required']) !!}
			</div>
		</div>
		<div class="col-xs-12 ">
			<div class="form-group">
				{!! Form::submit('Guardar',['class' =>'btn btn-primary']); !!}
			</div>
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection