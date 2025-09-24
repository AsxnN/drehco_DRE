@extends('principal.plantilla')
@section('title', 'DRE - HUANUCO')
@section('content')
<!-- START SECTION BREADCRUMB -->
<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="{{asset('img/bc.jpeg')}}">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-sm-6">
            	<div class="page-title">
            		<h1>Gestion de Documentos</h1>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Gestion de Documentos</li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->
<!-- START SECTION GALLERY -->
<section style="height: 800px">
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Archivos</th>
                        </tr>
                    </thead>
                    <tbody>
@foreach ($registros as $item)
    <tr>
        <td>{{ $item->titulo }}</td>
        <td>
            <div class="dropdown">
                <button class="dropdown-button">Ver archivos</button>
                <div class="dropdown-content">
                    @foreach ($item->archivos as $row)
                        <a href="{{ $row['url_archivo'] }}" target="_blank">{{ $row['nombre'] }}</a>
                    @endforeach
                </div>
            </div>
        </td>
    </tr>
@endforeach
</tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<style>
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-button {
        background-color: #4a5568;
        color: white;
        padding: 4px 8px;
        font-size: 12px; /* letra más pequeña */
        border: none;
        cursor: pointer;
        border-radius: 4px;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        width: auto;
        max-width: auto;
        box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
        z-index: 1;
        border-radius: 4px;
        overflow: hidden;
        white-space: nowrap;
    }

    .dropdown-content a {
        color: #1a202c;
        padding: 4px 10px;
        font-size: 12px; /* letra más pequeña */
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
</style>


<!-- END SECTION GALLERY -->

@endsection
