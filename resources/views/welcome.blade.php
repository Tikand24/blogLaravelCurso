@extends('admin.template.main')
@section('title','Inicio')
@section('content')
<div class="page-title">
  <div class="title_left">
    <h3>Articulos</h3>
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
    <div class="container-fluid">
      <div class="row">
        @foreach ($articulos as $articulo)
        <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">{{ $articulo->title }}</h3>
            </div>
            <div class="panel-body">
              <div class="image view view-first">
                <img class="img-responsive" src="{{ asset('images/articles/'.$articulo->images[0]->name) }}" alt="sin imagen" />
                <div class="mask">
                  <p>{{ $articulo->title }}</p>
                  <div class="tools tools-bottom">
                    <a href="{{ route('articulo',$articulo->slug) }}">Ver mas</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <a href="{{ route('articulo',$articulo->slug) }}" class="btn btn-round btn-primary">Leer articulo <i class="fa fa-book"></i></a>
              <p><span><i class="fa fa-newspaper-o"></i></span> {{ $articulo->created_at->diffForHumans()}}</p>
              <p><span><i class="fa fa-folder-open"></i></span>
              <a href="{{ route('categoria',$articulo->category->name) }}">{{ $articulo->category->name }}</a></p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      {!! $articulos->render() !!}
    </div>
  </div>
</div>
@endsection
<!--<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog Laravel</title>
    <link href="{{ asset('plugins/startbootstrap/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('plugins/startbootstrap/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="{{ asset('plugins/startbootstrap/css/freelancer.css')}}" rel="stylesheet">
  </head>
  <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Blog</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Articulos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Acerca de</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
            </li>
            @if (Auth::check())
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ route('admin.index') }}">Administracion</a>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Login</a>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
    <header class="masthead">
      <div class="container">
        <img class="img-fluid" src="{{ asset('plugins/startbootstrap/img/profile.png') }}" alt="">
        <div class="intro-text">
          <span class="name">Blog con laravel</span>
          <hr class="star-light">
          <span class="skills">Desarrollador web - Artista grafico - Diseñador de experiencia de usuario</span>
        </div>
      </div>
    </header>
    <section id="portfolio">
      <div class="container">
        <h2 class="text-center">Articulos</h2>
        <hr class="star-primary">
        <div class="row">
          @foreach ($articulos as $articulo)
          <div class="col-sm-4 portfolio-item">
            <a class="portfolio-link" href="#portfolioModal{{$articulo->id}}" data-toggle="modal">
              <div class="caption">
                <div class="caption-content">
                  <p>{{ $articulo->title }}</p>
                  <i class="fa fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{ asset('images/articles/'.$articulo->images[0]->name) }}" alt="">
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <section class="success" id="about">
      <div class="container">
        <h2 class="text-center">Acerca de </h2>
        <hr class="star-light">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p>Desarrollado por Jonatan Villalobos, utilizando el framework Laravel con codigo de referencia del curso de laravel de codigo facilito </p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p>Tema utilizado para este desarrollo: startbootstrap-freelancer. Codigo abierto</p>
          </div>
          <div class="col-lg-8 mx-auto text-center">
            <a href="https://github.com/Tikand24/blogLaravelCurso" class="btn btn-lg btn-outline">
              <i class="fa fa-download"></i>
              Descargar codigo
            </a>
          </div>
        </div>
      </div>
    </section>
    <section id="contact">
      <div class="container">
        <h2 class="text-center">Contactarme</h2>
        <hr class="star-primary">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Nombre</label>
                  <input class="form-control" id="name" type="text" placeholder="Nombre" required data-validation-required-message="Por favor ingrese su nombre.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Correo electronico</label>
                  <input class="form-control" id="email" type="email" placeholder="Correo electronico" required data-validation-required-message="Por favor ingrese su correo electronico.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Numero de telefono</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Numero de telefono" required data-validation-required-message="Ingrese su correo electronico">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Mensaje</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Mensaje" required data-validation-required-message="Por favor ingrese un menjsa."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer class="text-center">
      <div class="footer-above">
        <div class="container">
          <div class="row">
            <div class="footer-col col-md-4">
              <h3>Location</h3>
              <p>3481 Melrose Place
              <br>Beverly Hills, CA 90210</p>
            </div>
            <div class="footer-col col-md-4">
              <h3>Around the Web</h3>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-google-plus"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-linkedin"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn-social btn-outline" href="#">
                    <i class="fa fa-fw fa-dribbble"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="footer-col col-md-4">
              <h3>About Freelancer</h3>
              <p>Freelance is a free to use, open source Bootstrap theme created by
                <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-below">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                Copyright &copy; Your Website 2017
              </div>
            </div>
          </div>
        </div>
      </footer>
      <div class="scroll-top d-lg-none">
        <a class="btn btn-primary js-scroll-trigger" href="#page-top">
          <i class="fa fa-chevron-up"></i>
        </a>
      </div>
      @foreach ($articulos as $articulo)
      <div class="portfolio-modal modal fade" id="portfolioModal{{ $articulo->id }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
              <div class="lr">
                <div class="rl"></div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <div class="modal-body">
                    <h2>{{$articulo->title}}</h2>
                    <hr class="star-primary">
                    <img class="img-fluid  img-centered" src="{{ asset('images/articles/'.$articulo->images[0]->name) }}" alt="">
                    {!! $articulo->content !!}
                    <a href="#" class="btn btn-lg btn-outline-nice">
                      Ver mas
                    </a>
                    <ul class="list-inline item-details">
                      <li>Categoria
                        <strong>
                        <a href="{{ route('inicio.buscar.categoria',$articulo->category->name) }}">{{ $articulo->category->name }}</a>
                        <a href="">{{ $articulo->category->name }}</a>
                        </strong>
                      </li>
                      <li>Publicado:
                        <strong>
                        <a href="http://startbootstrap.com">{{ $articulo->created_at->diffForHumans()}}</a>
                        </strong>
                      </li>
                      <li>Autor:
                        <strong>
                        <a href="http://startbootstrap.com">Web Development</a>
                        </strong>
                      </li>
                    </ul>
                    <button class="btn btn-success" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Cerrar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <script src="{{ asset('plugins/startbootstrap/vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{ asset('plugins/startbootstrap/vendor/popper/popper.min.js')}}"></script>
      <script src="{{ asset('plugins/startbootstrap/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
      <script src="{{ asset('plugins/startbootstrap/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
      <script src="{{ asset('plugins/startbootstrap/js/jqBootstrapValidation.js')}}"></script>
      <script src="{{ asset('plugins/startbootstrap/js/contact_me.js')}}"></script>
      <script src="{{ asset('plugins/startbootstrap/js/freelancer.min.js')}}"></script>
    </body>
  </html>-->