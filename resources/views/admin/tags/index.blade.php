@extends('admin.template.main')
@section('title','Listado de tags')
@section('content')
<div class="container">
{!! Form::open(['route' => 'tags.index','method'=> 'GET','class' =>'navbar-form pull-right' ]) !!}
			<div class="form-group">
				{!! Form::text('name','',['class'=>'form-control','placeholder'=>'Ej: tag1', 'required']) !!}
			</div>
			<button type="submit" class="btn btn-default">Buscar</button>
		{!! Form::close() !!}
		<a href="{{ route('tags.create') }}" class="btn btn-success">Crear un tag</a>
		<hr>
	<table class="table table-striped">
		<thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach($tags as $tag)
			<tr>
				<td>{{ $tag->id }}</td>
				<td>{{ $tag->name }}</td>
				<td>
					<a href="{{ route('tags.edit',$tag->id) }}" class="btn btn-primary">
						<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
					</a>
					<a href="{{ route('admin.tags.destroy',$tag->id) }}" class="btn btn-danger">
						<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
					</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{!! $tags->render() !!}
</div>
@endsection