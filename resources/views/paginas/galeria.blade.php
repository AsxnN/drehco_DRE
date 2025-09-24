@extends('principal.plantilla')
@section('title', 'UGEL - HUACAYBAMBA')
@section('content')
<!-- START SECTION BREADCRUMB -->
<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="{{asset('img/bc.jpeg')}}">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-sm-6">
            	<div class="page-title">
            		<h1>GALERIA</h1>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Galeria</li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->
<!-- START SECTION GALLERY -->

<section class="our-webcoderskull padding-lg">
  <div class="container">

      <ul class="row">
        @foreach ($registrosgaleria as $item)
          <li class="col-12 col-md-6 col-lg-3">
            <a href="{{ route('portafoliodet', $item) }}" class="card-link" style="display: block; color: inherit; text-decoration: none;">
              <div class="cnt-block equal-hight" style="height: 250px;">
                <figure>
                  <img src="{{ asset('img/imageneventos/' . $item->img) }}" class="img-responsive" alt="">
                </figure>
                <h3>{{ $item->titulo }}</h3>
                <p>{{ $item->descripcion }}</p>
              </div>
            </a>
          </li>
        @endforeach
      </ul>
  </div>
</section>


<!-- END SECTION GALLERY -->

@endsection