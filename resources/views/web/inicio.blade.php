@extends('layouts.app')

@section('contenido')
    <div class="container-fluid m-0 p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('image/banner-1.jpeg') }}" alt="First slide">                     
                    <div class="carousel-caption d-none d-md-block">
                        <div class="contenido-carousel m-3 p-3">
                            <h5>Edificio Plaza 10 </h5>
                            <p>Edificio Tenis Boulevard ubicado en Quito Tenis Alto ofrece suites y apartamentos de lujo desde…</p>
                            <h6>Desde $99,000</h6>
                        </div>
                        <button type="button" class="btn btn-secondary mr-3">Más información</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('image/banner-2.jpeg') }}" alt="First slide">                     
                    <div class="carousel-caption d-none d-md-block">
                        <div class="contenido-carousel m-3 p-3">
                            <h5>Edificio Plaza 10 </h5>
                            <p>Edificio Tenis Boulevard ubicado en Quito Tenis Alto ofrece suites y apartamentos de lujo desde…</p>
                            <h6>Desde $99,000</h6>
                        </div>
                        <button type="button" class="btn btn-secondary mr-3">Más información</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('image/banner-1.jpeg') }}" alt="First slide">                     
                    <div class="carousel-caption d-none d-md-block">
                        <div class="contenido-carousel m-3 p-3">
                            <h5>Edificio Plaza 10 </h5>
                            <p>Edificio Tenis Boulevard ubicado en Quito Tenis Alto ofrece suites y apartamentos de lujo desde…</p>
                            <h6>Desde $99,000</h6>
                        </div>
                        <button type="button" class="btn btn-secondary mr-3">Más información</button>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">                   
                <i class="fa fa-caret-left fa-5x" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <i class="fa fa-caret-right fa-5x"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="esp-bloq">
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center pb-3">
                <h3>Un proyecto para cada estilo de vida</h3>
            </div>
            
        </div>
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <img src="{{ asset('image/foco.png') }}" alt="casa ejm" class="img-fluid rounded-circle">
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <img src="{{ asset('image/foco.png') }}" alt="casa ejm" class="img-fluid rounded-circle">
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <img src="{{ asset('image/foco.png') }}" alt="casa ejm" class="img-fluid rounded-circle">
                </div>
            </div>
            <div class="col">
                <div class="text-center">
                    <img src="{{ asset('image/foco.png') }}" alt="casa ejm" class="img-fluid rounded-circle">
                </div>
            </div>  
        </div>
        <div class="row">
            <div class="col text-center pt-3">
                Sea cual sea tu necesidad y tu estilo de vida tenemos un proyecto para ti.
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="esp-bloq">
        </div>
    </div>
    <div class="container-fluid color-s">
        <div class="row justify-content-center p-3">
            <div class="col-sm-5 m-5 contorno">
                <div class="titulo-card">
                    <h5 class="pt-2 pb-2 mb-2">Dpto, 178 M2, 3 Dorm, Sector Pinar Alto</h5>
                </div>
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 color-l-p">Departamentos</strong>
                        <h3 class="mb-0">
                        <a class="text-dark" href="#">Desde $170,000</a>
                        </h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">Departamento con hermosa vista a Quito Ubicado en el sector Pinar Alto,…</p>
                        <a class="color-l-p" href="#">Más información</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block img-p-1" src="{{ asset('image/casa_1.png') }}" alt="Card image cap">
                </div>
                <div class="pie-card border-top p-2">
                    <span class="badge badge-pill badge-light"> <i class="fa fa-stop fa-2x" aria-hidden="true"></i> 178 m2</span>
                    <span class="badge badge-pill badge-light"> <i class="fa fa-map-marked fa-2x" aria-hidden="true"></i> Sector Pinar Alto</span>
                    <span class="badge badge-pill badge-light"> <i class="fa fa-bed fa-2x" aria-hidden="true"></i> 3 Bedrooms</span>
                    <span class="badge badge-pill badge-light"> <i class="fa fa-bath fa-2x" aria-hidden="true"></i> 4 Bathrooms</span>
                    <span class="badge badge-pill badge-light"> <i class="fa fa-car fa-2x" aria-hidden="true"></i> 2 Garages</span>
                </div>
            </div>
            <div class="col-sm-5 m-5 contorno">
                <div class="titulo-card">
                    <h5 class="pt-2 pb-2 mb-2">Dpto, 178 M2, 3 Dorm, Sector Pinar Alto</h5>
                </div>
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 color-l-p">Departamentos</strong>
                        <h3 class="mb-0">
                        <a class="text-dark" href="#">Desde $170,000</a>
                        </h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">Departamento con hermosa vista a Quito Ubicado en el sector Pinar Alto,…</p>
                        <a class="color-l-p" href="#">Más información</a>
                    </div>
                    <img  class="card-img-right flex-auto d-none d-lg-block img-p-1" src="{{ asset('image/casa_2.png') }}" alt="Card image cap">
                </div>
                <div class="pie-card border-top p-2">
                    <span class="badge badge-pill badge-light"> <i class="fa fa-stop fa-2x" aria-hidden="true"></i> 178 m2</span>
                    <span class="badge badge-pill badge-light"> <i class="fa fa-map-marked fa-2x" aria-hidden="true"></i> Sector Pinar Alto</span>
                    <span class="badge badge-pill badge-light"> <i class="fa fa-bed fa-2x" aria-hidden="true"></i> 3 Bedrooms</span>
                    <span class="badge badge-pill badge-light"> <i class="fa fa-bath fa-2x" aria-hidden="true"></i> 4 Bathrooms</span>
                    <span class="badge badge-pill badge-light"> <i class="fa fa-car fa-2x" aria-hidden="true"></i> 2 Garages</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="esp-bloq">
        </div>
    </div>
    <div class="container-fluid">
        <div class="row p-3">
            <div class="col-sm-4">
                <div class="card">
                  <img class="card-img-top img-fluid" src="{{ asset('image/articulo-1.jpg') }}" alt="Card image cap">  
                  <div class="card-body">
                    <h6>Febrero 07, 2017 por <span class="badge badge-secondary">ECON</span></h6>
                    <p class="card-text">¿Qué es el impuesto a la plusvalía? Es una normativa que pretende evitar la especulación del costo del…</p>
                    <a href="#" class="btn btn-secondary btn-sm">Leer más <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                  </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                  <img class="card-img-top img-fluid" src="{{ asset('image/articulo-1.jpg') }}" alt="Card image cap">  
                  <div class="card-body">
                    <h6>Febrero 07, 2017 por <span class="badge badge-secondary">ECON</span></h6>
                    <p class="card-text">¿Qué es el impuesto a la plusvalía? Es una normativa que pretende evitar la especulación del costo del…</p>
                    <a href="#" class="btn btn-secondary btn-sm">Leer más <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                  </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                  <img class="card-img-top img-fluid" src="{{ asset('image/articulo-1.jpg') }}" alt="Card image cap">  
                  <div class="card-body">
                    <h6>Febrero 07, 2017 por <span class="badge badge-secondary">ECON</span></h6>
                    <p class="card-text">¿Qué es el impuesto a la plusvalía? Es una normativa que pretende evitar la especulación del costo del…</p>
                    <a href="#" class="btn btn-secondary btn-sm">Leer más <i class="fa fa-caret-right" aria-hidden="true"></i></a>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
