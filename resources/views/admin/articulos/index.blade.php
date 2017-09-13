@extends('admin.template.main')
@section('title','Listado de articulos')
@section('content')
<div class="container">
<div class="row">
	<a href="{{ route('articulos.create') }}" class="btn btn-success">Crear una articulo</a>
</div>
</div>
@endsection