@extends('admin.template.main')
@section('title',$articulo->title)
@section('content')
<div class="page-title">
	<div class="title_left">
		<h1>{{ $articulo->title }}</h1>
		<small>Autor: {{ $articulo->user->name }}</small>
		<br>
		<small>Categoria: {{ $articulo->category->name }}</small>
	</div>
	<div class="title_right">
		<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
			{!! Form::open(['route' => 'inicio','method'=> 'GET' ]) !!}
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
<div class="clearfix"></div>
<div class="x_panel">
	<div class="x_content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="profile_img">
						<div id="crop-avatar">
							<!-- Current avatar -->
							<img class="img-responsive avatar-view" src="{{ asset('images/articles/'.$articulo->images[0]->name) }}" alt="Avatar" title="Change the avatar">
						</div>
					</div>
				</div>
				<div class="col-md-12">
					{!! $articulo->content !!}
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<div class="x_panel">
	<div class="x_content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					@foreach ($articulo->tags as $tagsArticulo)
						<span class="label label-default">{{ $tagsArticulo->name }}</span>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<div class="x_panel">
	<div class="x_content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

	<div class="title_left">
		<h3>Comentarios</h3>
	</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://blog-laravel-9.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<script id="dsq-count-scr" src="//blog-laravel-9.disqus.com/count.js" async></script>
@endsection