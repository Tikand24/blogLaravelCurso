@extends('layouts.app')

@section('content')
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
    <div class="login_wrapper">
        <div id="register" class="animate form registration_form">
            <section class="login_content">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <h1>Crear cuenta</h1>
                    <div>
                        <input type="text" class="form-control" placeholder="Usuario" name="name" id="name" value="{{ old('name') }}" required autofocus/>
                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required/>
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Contraseña" name="password" required/>
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Confirmar contraseña" name="password_confirmation" id="password_confirmation" required/>
                    </div>
                    <div>
                        <button class="btn btn-default submit">Registrar</button>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">
                        <p class="change_link">Ya tiene una cuenta ?
                            <a href="{{ route('login') }}" class="to_register"> Ingresar </a>
                        </p>
                        <div class="clearfix"></div>
                        <br />
                        <div>
                            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
@endsection
