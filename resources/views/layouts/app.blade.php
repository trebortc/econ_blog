<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fin CSRF Token -->

        <title>{{ config('app.name', 'ECON') }}</title>
        <!-- Styles -->
            <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
            <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
            <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
            <link href="{{ asset('css/hover.css') }}" rel="stylesheet" type="text/css">
            <link rel="icon" type="image/x-icon" href={{ asset('econ.ico') }} />
        <!-- FinStyles -->
    </head>
    <body class="color-fondo">
        <!-- Navegación -->
        <nav class="navbar navbar-expand-md navbar-light flex-row fixed-top justify-content-end p-0 m-0" style="background-color: rgb(226,227,229);" >
            <ul class="navbar-nav flex-row ml-lg-0">
                @guest
                    <li class="nav-item">
                        <a class="nav-link p-3" href="{{ route('login') }}"><i class="fa fa-user" style="color:black;"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-3" href="{{ route('register') }}"><i class="fas fa-clipboard-list" style="color:black;"></i></a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link p-3" href="{{ route('tags.index') }}"><i class="fa fa-tag" style="color:black;"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-3" href="{{ route('categories.index') }}"><i class="fab fa fa-bars" style="color:black;"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-3" href="{{ route('posts.index') }}"><i class="fa fa-clipboard" style="color:black;"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-3" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            <i class="fa fa-times" aria-hidden="true" style="color:black;"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                @endguest
            </ul>         
        </nav>
        <nav class="navbar navbar-expand-md navbar-light flex-row fixed-top fixed-top-1 justify-content-center" style="background-color: rgb(226,227,229);" >
            <div class="flex-row">
                <a class="navbar-brand mr-auto" href="/">
                    <img src="{{ asset('image/econ_grande_a.svg') }}" class="img-fluid" alt="Responsive image">
                </a>
            </div>
            <button class="navbar-toggler ml-lg-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
        <nav class="navbar navbar-expand-md navbar-light fixed-top fixed-top-1 fixed-top-2" style="background-color: rgb(187, 188, 189);">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link boton m-1 p-1 hvr-grow" href="{{ route('inicio') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link boton m-1 p-1 hvr-grow" href="{{ route('quienesomos') }}">Quiénes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link boton m-1 p-1 hvr-grow" href="{{ route('proyectos') }}">Nuestros Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link boton m-1 p-1 hvr-grow" href="{{ route('financiamiento') }}">Financiamiento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link boton m-1 p-1 hvr-grow" href="{{ route('noticias') }}">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link boton m-1 p-1 hvr-grow" href="{{ route('contactos') }}">Contactos</a>
                    </li>
                </ul>
                <div class="form-inline my-2 my-lg-0 mr-3">
                    <input class="form-control" type="text" placeholder="Search" value="593 + 969305524">
                    <button class="btn btn-outline-secondary" type="submit"><a href="https://api.whatsapp.com/send?phone=593969305524"><i class="fa fa-phone"></i></a></button>
                </div>
            </div>       
        </nav>
        <!-- FinNavegacion -->

        <!-- Contenido -->
        @yield('contenido')  
        <!-- FinContenido -->

        <!-- Footer -->
        @yield('footer')
        <!-- FinFooter -->

        <!-- Scripts -->
        <script src="{{ asset('js/jquery-3.2.1.js') }}" type="text/javascript" charset="utf-8" ></script>
        <script src="{{ asset('js/popper.min.js') }}" type="text/javascript" charset="utf-8" ></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript" charset="utf-8" ></script>
        <!--FinScripts -->

        <!-- Añadir Scripts -->
        @yield('scripts')
        <!-- FinScripts -->
    </body>
</html>
