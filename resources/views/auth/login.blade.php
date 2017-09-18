@extends('layouts.app')
@section('content')
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <h1>Inicio de sesion</h1>
                    <div>
                        <input type="email" class="form-control" placeholder="Correo electronico" required=""  name="email" value="{{ old('email') }}" required autofocus/>
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Contraseña" name="password" id="password" required="" />
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div>
                        <button class="btn btn-default submit">Ingresar</button>
                        <a class="reset_pass" href="{{ route('password.request') }}">¿Olvido su contraseña?</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">
                        <p class="change_link">¿Nuevo en el sitio?
                            <a href="{{ route('register') }}" class="to_register"> Crear cuenta </a>
                        </p>
                        <div class="clearfix"></div>
                        <br />
                        <div>
                            <h1><i class="fa fa-paw"></i> <a href="{{ route('inicio') }}">Inicio</a></h1>
                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
@endsection