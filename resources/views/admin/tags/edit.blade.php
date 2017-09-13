@extends('admin.template.main')
@section('title','Crear un tag')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route' => ['tags.update',$tags->id],'method'=> 'PUT']) !!}
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				{!! Form::label('tag','Nombre de la categoria') !!}
				{!! Form::text('tag',$tags->name,['class'=>'form-control','placeholder'=>'Ej: tag1', 'required']) !!}
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