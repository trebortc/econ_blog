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
                <li class="nav-item">
                    <a class="nav-link p-3"><i class="fa fa-search" style="color:black;"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3"><i class="fa fa-user" style="color:black;"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link p-3"><i class="fab fa-facebook-f" style="color:black;"></i></a>
                </li>
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
        <footer class="page-footer font-small blue-grey lighten-5">
            <div style="background-color: rgb(0, 72, 94);">
                <div class="container">
                    <div class="row py-4 d-flex align-items-center">
                        <div class="col-md-6 col-lg-5 text-center text-white text-md-left mb-4 mb-md-0">
                            <h6 class="mb-0">¡Conéctate con nosotros en las redes sociales!</h6>
                        </div>
                        <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <a class="fb-ic"><i class="fab fa-facebook-f text-white mr-4"></i></a>
                        <!-- Twitter -->
                        <a class="tw-ic"><i class="fab fa-twitter text-white mr-4"></i></a>
                        <!-- Google +-->
                        <a class="gplus-ic"><i class="fab fa-google-plus text-white mr-4"></i></a>
                        <!--Linkedin -->
                        <a class="li-ic"><i class="fab fa-linkedin text-white mr-4"></i></a>
                        <!--Instagram-->
                        <a class="ins-ic"><i class="fab fa-instagram text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Links -->
            <div class="container text-center text-md-left mt-5">
                <div class="row mt-3 dark-grey-text">
                    <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                        <h6 class="text-uppercase font-weight-bold text-econ">ECON</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p class="lead text-justify">Es una empresa sólida, con proyectos inmobiliarios edificados de la mano de profesionales de primer nivel con más de 35 años de experiencia en el mercado de la construcción en el Ecuador. </p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold text-econ">Proyectos</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p><a class="text-econ" href="#!">Proyecto 1</a></p>
                        <p><a class="text-econ" href="#!">Proyecto 2</a></p>
                        <p><a class="text-econ" href="#!">Proyecto 3</a></p>
                        <p><a class="text-econ" href="#!">Proyecto 4</a></p>
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold text-econ">Noticias</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p><a class="text-econ" href="#!">Noticia 1</a></p>
                        <p><a class="text-econ" href="#!">Noticia 2</a></p>
                        <p><a class="text-econ" href="#!">Noticia 3</a></p>
                        <p><a class="text-econ" href="#!">Noticia 4</a></p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase font-weight-bold text-econ">Contactos</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p><i class="fa fa-home mr-3"></i> Edif. Daniel Cárdenas 6to Piso Ofic. 601</p>
                        <p><i class="fa fa-envelope mr-3"></i> valledorado.quito@gmail.com</p>
                        <p><i class="fa fa-phone mr-3"></i> (02) 2900 952</p>
                        <p><i class="fa fa-print mr-3"></i> (02) 2900 930 </p>
                        <p><i class="fa fa-mobile mr-3"></i> (02) 0960535358 </p>
                    </div>
                </div>
            </div>
        </footer>
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
