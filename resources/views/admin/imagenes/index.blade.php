@extends('admin.template.main')
@section('title','Listado de imagenes')
@section('content')
<div class="container">
	<div class="row">
		@foreach ($imagenes as $image)
		<div class="col-sm-6 col-md-4">
			<div class="thumbnail">
				<img src="/images/articles/{{ $image->name }}" alt="imagen no encontrada">
				<div class="caption">
					<h3>{{ $image->article->title }}</h3>
					<p>Fecha de creacion: {{ $image->created_at}}</p>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection