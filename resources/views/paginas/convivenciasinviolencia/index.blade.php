@extends('principal.plantilla')
@section('title', 'En Huánuco Todos Unidos por una Convivencia Sin Violencia')
@section('content')

<!-- Hero Section -->
<section class="bg-primary text-white py-5" style="min-height: 100vh; background: linear-gradient(135deg, #0d6efd 0%, #6f42c1 50%, #dc3545 100%) !important;">
    <div class="container h-100 d-flex align-items-center">
        <div class="row w-100 justify-content-center text-center">
            <div class="col-lg-10">
                <h1 class="display-2 fw-bold mb-4">
                    En Huánuco
                    <span class="d-block text-warning">Todos Unidos</span>
                    <span class="d-block text-success">por una Convivencia</span>
                    <span class="d-block text-danger">Sin Violencia</span>
                </h1>
                <p class="lead fs-4 mb-5">
                    Construyendo juntos un futuro de paz, respeto y armonía en nuestras instituciones educativas
                </p>
                <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                    <a href="#programas" class="btn btn-warning btn-lg px-5 py-3 rounded-pill fw-bold">
                        CONOCE NUESTROS PROGRAMAS
                    </a>
                    <a href="#programas" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill fw-bold">
                        VER ACTIVIDADES
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Welcome Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6">
                <div class="text-start mb-5">
                    <h2 class="display-4 fw-bold text-dark mb-4">Bienvenidos a Nuestra Estrategia</h2>
                    <div class="mb-4" style="width: 100px; height: 4px; background: linear-gradient(90deg, #0d6efd, #6f42c1); border-radius: 2px;"></div>
                    <p class="lead text-muted fs-5">
                        La estrategia "En Huánuco Todos Unidos por una Convivencia Sin Violencia" representa nuestro compromiso 
                        firme con la construcción de espacios educativos seguros, donde cada estudiante pueda desarrollarse 
                        plenamente en un ambiente de respeto, tolerancia y paz.
                    </p>
                </div>
                
                <div class="row mt-4">
                    <div class="col-12 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-success text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Prevención de la Violencia</h5>
                                <p class="mb-0 text-muted">Estrategias proactivas para crear ambientes seguros</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Formación Integral</h5>
                                <p class="mb-0 text-muted">Desarrollo de habilidades socioemocionales</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-warning text-dark rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fas fa-users"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Participación Comunitaria</h5>
                                <p class="mb-0 text-muted">Involucramiento de familias y comunidad</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-info text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fas fa-dove"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1">Cultura de Paz</h5>
                                <p class="mb-0 text-muted">Promoción de valores y resolución pacífica</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Imagen de bienvenida -->
            <div class="col-lg-6">
                <div class="text-center">
                    <img src="{{ asset('img/convivencia/bienvenida.jpg') }}" 
                         alt="Bienvenida Convivencia Sin Violencia" 
                         class="img-fluid rounded-4 shadow-lg"
                         style="max-height: 500px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Carousel Section -->
<section id="programas" class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 fw-bold text-dark mb-4">Programas Destacados</h2>
            <div class="mx-auto mb-4" style="width: 100px; height: 4px; background: linear-gradient(90deg, #0d6efd, #6f42c1); border-radius: 2px;"></div>
            <p class="lead text-muted">
                Conoce nuestros principales programas para promover la convivencia pacífica
            </p>
        </div>
        
        <!-- Bootstrap Carousel -->
                <section class="container-fluid py-0">
            <div class="row py-1 mt-0">
                <div class="col-md-1"></div>
                    <div class="col-md-10 py-1">
                        <section class="pt-0">
                            <div class="w-full h-full">
                                <section class="pt-0 ptt">
                                    <div class="container-card">
                                        <section class="pt-5 pb-5">
                                            <div class="container-card">
                                                <div class="text-center">
                                                    <h2>Comunicados</h2>
                                                </div>
                                                <div class="row ">
                                                    <div class="col-6 text-left">
                                                        <a class="btn btn-primary mb-3 mr-1 btncor" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                                                            <i class="fa fa-arrow-left"></i>
                                                        </a>
                                                        <a class="btn btn-primary mb-3 btncor" href="#carouselExampleIndicators3" role="button" data-slide="next">
                                                            <i class="fa fa-arrow-right"></i>
                                                        </a>
                                                    </div>
                                                    <div class="col-6 text-right fs-1">
                                                    </div>
                                                    <div class="col-12">
                                                        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                                                            <div class="carousel-inner">
                                                                @foreach($comunicados->chunk(3) as $chunk)
                                                                    <div class="carousel-item @if($loop->first) active @endif">
                                                                        <div class="row">
                                                                            @foreach ($chunk as $item)
                                                                                <div class="col-md-4 mb-3">
                                                                                    <div class="card card-text text-center">
                                                                                        <div>
                                                                                            <img class="img-fluid" alt="100%x280" src="{{ asset('img/convivencia/img1.jpg') }}" alt="{{$item->titulo}}" loading="lazy">
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <h3 class="card-title txt-ah3">Titulo 1</h3>
                                                                                            <a class="txt-ah3" target="_blank" href="" title="Ver Más">Doc<i class="fa fa-eye"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 mb-3">
                                                                                    <div class="card card-text text-center">
                                                                                        <div>
                                                                                            <img class="img-fluid" alt="100%x280" src="{{ asset('img/convivencia/img2.jpg') }}" alt="{{$item->titulo}}" loading="lazy">
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <h3 class="card-title txt-ah3">Titulo 1</h3>
                                                                                            <a class="txt-ah3" target="_blank" href="" title="Ver Más">Doc<i class="fa fa-eye"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>w
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </section>
                            </div>
                        </section>
                    </div>
                <div class="col-md-1"></div>
            </div>
        </section>

<!-- Call to Action -->
<section class="py-5 text-white" style="background: linear-gradient(135deg, #0d6efd 0%, #6f42c1 100%);">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="display-4 fw-bold mb-4">¡Únete a Nuestra Misión!</h2>
                <p class="lead mb-5 fs-5">
                    Juntos podemos construir un futuro donde la violencia no tenga lugar en nuestras escuelas. 
                    Tu participación es fundamental para lograr una convivencia sin violencia.
                </p>
                <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                    <a href="#" class="btn btn-warning btn-lg px-5 py-3 rounded-pill fw-bold">
                        PARTICIPAR
                    </a>
                    <a href="#" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill fw-bold">
                        MÁS INFORMACIÓN
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection