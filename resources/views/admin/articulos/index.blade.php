@extends('admin.template.main')
@section('title','Listado de articulos')
@section('content')
<div class="container">
	<div class="row">
		<a href="{{ route('articulos.create') }}" class="btn btn-success">Crear una articulo</a>

	{!! Form::open(['route' => 'articulos.index','method'=> 'GET','class' =>'navbar-form pull-right' ]) !!}
	<div class="form-group">
		{!! Form::text('name','',['class'=>'form-control','placeholder'=>'Ej: tag1', 'required']) !!}
	</div>
	<button type="submit" class="btn btn-default">Buscar</button>
	{!! Form::close() !!}
	</div>
	<table class="table table-striped">
		<thead>
			<th>Id</th>
			<th>Titulo</th>
			<th>Categoria</th>
			<th>Usuario</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($articulos as $art)
			<tr>
				<td>{{ $art->id }}</td>
				<td>{{ $art->title }}</td>
				<td>{{ $art->category->name }}</td>
				<td>{{ $art->user->name }}</td>
				<td>
				<a href="{{ route('articulos.edit',$art->id) }}" class="btn btn-primary">
				<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
				</a>
				<a href="{{ route('admin.articulos.destroy',$art->id) }}" class="btn btn-danger">
				<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
				</a>
				</td>

			</tr>
			@endforeach
		</tbody>
	</table>
	{!! $articulos->render() !!}
</div>
@endsection