
<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ route('inicio') }}" class="site_title"><i class="fa fa-paw"></i> <span>Blog Laravel</span></a>
        </div>
        <div class="clearfix"></div>
        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ asset('plugins/plantilla/production') }}/images/user.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Bienvenido,</span>
                @if (Auth::check())
                <h2>{{ Auth::user()->name }}</h2>
                @else
                <h2></h2>
                @endif
            </div>
        </div>
        <!-- /menu profile quick info -->
        <br />
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    @if (Auth::check())
                    <li>
                        <a><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admin.index') }}">Administracion</a></li>
                            <li><a href="{{ route('inicio') }}">Presentacion de Articulos</a></li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-desktop"></i>Administrar <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="{{ route('articulos.index') }}">Arituclos</a>
                            </li>
                            <li>
                                <a href="{{ route('categorias.index') }}">Categorias</a>
                            </li>
                            <li>
                                <a href="{{ route('tags.index') }}">Tags</a>
                            </li>
                            @if (Auth::user()->admin())
                            <li>
                                <a href="{{ route('users.index') }}">Usuarios</a>
                            </li>
                            @endif
                        </ul>
                    </li>
                    @else
                    <li>
                        <a href="{{ route('inicio') }}">Articulos</a>
                    </li>
                    @foreach ($category as $categorias)

                    <li>
                        <a href="{{ route('categoria',$categorias->name) }}">{{ $categorias->name }}</a>
                    </li>
                    @endforeach
                    @endif
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
        <!-- /menu footer buttons -->
        <!-- /menu footer buttons -->
    </div>
</div>
<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('plugins/plantilla/production') }}/images/user.png" alt="">
                        @if (Auth::check())
                        {{ Auth::user()->name }}
                        @else
                        @endif
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li>
                            @if (Auth::check())
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            @else
                                <a href="{{ route('login') }}">Iniciar sesion</a>
                            @endif
                        </li>
                        <li><a href="javascript:;">Help</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->
