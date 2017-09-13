@extends('admin.template.main')
@section('title','Crear Articulo')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route' => 'articulos.store','method'=>'POST','files'=>true]) !!}
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				{!! Form::label('titulo','Titulo del articulo') !!}
				{!! Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Titulo del articulo', 'required']) !!}
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				{!! Form::label('contenido','Contenido del articulo') !!}
				{!! Form::textarea('contenido',null,['class'=>'form-control','placeholder'=>'Contenido del articulo', 'required']) !!}
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				{!! Form::label('categorias','Categoria del articulo') !!}
				{!! Form::select('categorias',$categorias,null,['class'=>'form-control chosen-select','placeholder'=>'seleccione una categoria']) !!}
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				{!! Form::label('tag','Tags del articulo del articulo') !!}
				{!! Form::select('tag[]',$tags,null,['class'=>'form-control chosen-select','multiple','data-placeholder'=>'seleccione un maximo de 3 tags']) !!}
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				{!! Form::label('imagen','Imagenes para el articulo') !!}
				{!! Form::file('imagen',['class'=>'form-control']) !!}
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
@section('js')
<script type="text/javascript">
	$(".chosen-select").chosen({max_selected_options: 3,no_results_text: "No se encontro :"});
</script>
@endsection