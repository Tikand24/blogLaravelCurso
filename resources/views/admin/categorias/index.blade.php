@extends('admin.template.main')
@section('title','Listado de categorias')
@section('content')
<div class="container">
<div class="row">
	<a href="{{ route('categorias.create') }}" class="btn btn-success">Crear una categoria</a>
</div>
	<table class="table table-striped">
		<thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach($categorias as $catg)
			<tr>
				<td>{{ $catg->id }}</td>
				<td>{{ $catg->name }}</td>
				<td>
				<a href="{{ route('categorias.edit',$catg->id) }}" class="btn btn-primary">
				<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
				</a>
				<a href="{{ route('admin.categorias.destroy',$catg->id) }}" class="btn btn-danger">
				<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
				</a>
				</td>

			</tr>
			@endforeach
		</tbody>
	</table>
	{!! $categorias->render() !!}
</div>
@endsection