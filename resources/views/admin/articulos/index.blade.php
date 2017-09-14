@extends('admin.template.main')
@section('title','Listado de articulos')
@section('content')
<div class="container">
            <div class="page-title">
              <div class="title_left">
                <h3><a href="{{ route('articulos.create') }}" class="btn btn-success">Crear una articulo</a></h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                	{!! Form::open(['route' => 'articulos.index','method'=> 'GET' ]) !!}
                  <div class="input-group">
                   {!! Form::text('name','',['class'=>'form-control','placeholder'=>'Buscar..', 'required']) !!}
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="submit">Buscar</button>
                    </span>
                  </div>
                	{!! Form::close() !!}
                </div>
              </div>
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
					<a href="{{ route('articulos.edit',$art->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Actualizar">
						<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
					</a>
					<a href="{{ route('admin.articulos.destroy',$art->id) }}" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Eliminar">
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