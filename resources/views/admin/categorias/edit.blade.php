@extends('admin.template.main')
@section('title','Editar categoria')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route' => ['categorias.update',$categoria->id],'method'=>'PUT']) !!}
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				{!! Form::label('categoria','Nombre de la categoria') !!}
				{!! Form::text('categoria',$categoria->name,['class'=>'form-control','placeholder'=>'Ej: Noticas', 'required']) !!}
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