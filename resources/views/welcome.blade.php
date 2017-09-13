@extends('admin.template.main')

@section('title','Bienvenido')

@section('content')
<h1>Esto es bootstrap</h1>
{!! Form::open(['url' => 'foo/bar']) !!}
    //
{!! Form::close() !!}
<a href="" class="btn btn-success">boton</a>
@endsection
