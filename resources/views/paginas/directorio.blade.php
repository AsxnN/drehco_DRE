@extends('principal.plantilla')
@section('title', 'UGEL - HUACAYBAMBA')
@section('content')

<!-- START SECTION BREADCRUMB -->
<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="{{asset('img/bc.jpeg')}}">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-sm-6">
            	<div class="page-title">
            		<h1>DIRECTORIO</h1>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-sm-end">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Directorio</li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->
<!-- START SECTION GALLERY -->

<section>
    <div class="container">
      <div class="row justify-content-center">
  
          <!-- Primer div (el principal, grande y centrado) -->
          
          <div class="col-md-8 mb-5 text-center">
              <div class="row px-2" style="background-color: rgba(248,249,250,1); box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                  <div class="col-md-4 my-2">
                      <img src="{{ asset('img/fotos/'.$director->foto) }}" class="img-fluid rounded-start rounded" alt="..." style="object-fit: cover; height: 100%;">
                  </div>
                  <div class="col-md-8">
                      <div class="card-body px-4" style="color: #ffffff;"> <!-- Padding aplicado aquí -->
                          <h3 class="fs-1">{{ $director->cargo }}</h3> <!-- Fuente más grande -->
                          <p class="fs-2" style="color:#ffbc09; font-weight: bold;">{{ $director->apenom }}</p> <!-- Fuente más grande -->
                          <p class=""><small class="text-muted fs-2">{{ $director->email }}</small></p> <!-- Fuente más pequeña -->
                          <p class=""><small class="text-muted fs-2">Cel: {{ $director->celular }}</small></p> <!-- Fuente más pequeña -->
                      </div>
                  </div>
              </div>
          </div>
  
          <!-- Segundo y tercer div juntos -->
          <div class="row col-md-12">
              <div class="col-md-6 mb-3">
                  <div class="card mb-3 text-center" style="background-color: rgba(248,249,250,1); box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);">
                      <div class="row px-2">
                          <div class="col-md-4 my-2">
                              <img src="{{ asset('img/fotos/'.$jefeagi->foto) }}" class="img-fluid rounded-start rounded" alt="..." style="object-fit: cover; height: 100%;">
                          </div>
                          <div class="col-md-8">
                              <div class="card-body px-4"> <!-- Padding aplicado aquí -->
                                  <h5 class="fs-2">{{ $jefeagi->cargo }}</h5> <!-- Fuente más grande -->
                                  <p class=" fs-3" style="color:#ffbc09; font-weight: bold;">{{ $jefeagi->apenom }}</p> <!-- Fuente más grande -->
                                  <p class=""><small class="text-muted fs-3">{{ $jefeagi->email }}</small></p> <!-- Fuente más pequeña -->
                                  <p class=""><small class="text-muted fs-3">Cel: {{ $jefeagi->celular }}</small></p> <!-- Fuente más pequeña -->
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
  
              <div class="col-md-6 mb-3">
                  <div class="card mb-3 text-center" style="background-color: rgba(248,249,250,1); box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);">
                      <div class="row px-2">
                          <div class="col-md-4 my-2">
                              <img src="{{ asset('img/fotos/'.$jefeagp->foto) }}" class="img-fluid rounded-start rounded" alt="..." style="object-fit: cover; height: 100%;">
                          </div>
                          <div class="col-md-8">
                              <div class="card-body px-4"> <!-- Padding aplicado aquí -->
                                  <h5 class="fs-2">{{ $jefeagp->cargo }}</h5> <!-- Fuente más grande -->
                                  <p class=" fs-3" style="color:#ffbc09; font-weight: bold;">{{ $jefeagp->apenom }}</p> <!-- Fuente más grande -->
                                  <p class=""><small class="text-muted fs-3">{{ $jefeagp->email }}</small></p> <!-- Fuente más pequeña -->
                                  <p class=""><small class="text-muted fs-3">Cel: {{ $jefeagp->celular }}</small></p> <!-- Fuente más pequeña -->
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  
          <!-- Cuarto y quinto div juntos -->
          <div class="row col-md-12">
              <div class="col-md-6 mb-3">
                  <div class="card mb-3 text-center" style="background-color: rgba(248,249,250,1); box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);">
                      <div class="row px-2">
                          <div class="col-md-4 my-2">
                              <img src="{{ asset('img/fotos/'.$jefeaga->foto) }}" class="img-fluid rounded-start rounded" alt="..." style="object-fit: cover; height: 100%;">
                          </div>
                          <div class="col-md-8">
                              <div class="card-body px-4"> <!-- Padding aplicado aquí -->
                                  <h5 class="fs-2">{{ $jefeaga->cargo }}</h5> <!-- Fuente más grande -->
                                  <p class=" fs-3" style="color:#ffbc09; font-weight: bold;">{{ $jefeaga->apenom }}</p> <!-- Fuente más grande -->
                                  <p class=""><small class="text-muted fs-3">{{ $jefeaga->email }}</small></p> <!-- Fuente más pequeña -->
                                  <p class=""><small class="text-muted fs-3">Cel: {{ $jefeaga->celular }}</small></p> <!-- Fuente más pequeña -->
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
  
              <div class="col-md-6 mb-3">
                  <div class="card mb-3 text-center" style="background-color: rgba(248,249,250,1); box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);">
                      <div class="row px-2">
                          <div class="col-md-4 my-2">
                              <img src="{{ asset('img/fotos/'.$jefead2->foto) }}" class="img-fluid rounded-start rounded" alt="..." style="object-fit: cover; height: 100%;">
                          </div>
                          <div class="col-md-8">
                              <div class="card-body px-4"> <!-- Padding aplicado aquí -->
                                  <h5 class="fs-2">{{ $jefead2->cargo }}</h5> <!-- Fuente más grande -->
                                  <p class=" fs-3" style="color:#ffbc09; font-weight: bold;">{{ $jefead2->apenom }}</p> <!-- Fuente más grande -->
                                  <p class=""><small class="text-muted fs-3">{{ $jefead2->email }}</small></p> <!-- Fuente más pequeña -->
                                  <p class=""><small class="text-muted fs-3">Cel: {{ $jefead2->celular }}</small></p> <!-- Fuente más pequeña -->
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  
          <!-- Quinto div - Lista de 3 en 3 a partir del ID 30 -->
          <div class="col-md-12">
            <div class="p-2 gap-1"  style="background-color: rgba(248,249,250,1); box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);">
              <div class="row">
                  @foreach ($registros as $item)
                      @if ($item->id >= 30)
                          <div class="col-md-4 mb-3 col-sm-6">
                              <div class="card">
                                  <div class="row g-0">
                                      <div class="col-md-4 text-center pt-1">
                                          <img src="{{ asset('img/fotos/'.$item->foto) }}" class="img-fluid rounded-start rounded-circle" alt="..." style="max-height: 200px; width: auto;">
                                      </div>
                                      <div class="col-md-8">
                                          <div class="card-body">
                                              <h5 class="card-title fs-custom">{{ $item->cargo }}</h5>
                                              <p class="card-text fs-custom">{{ $item->apenom }}</p>
                                              <p class="card-text"><small class="text-muted fs-custom">{{ $item->email }}</small></p>
                                              <p class="card-text"><small class="text-muted fs-custom">Cel: {{ $item->celular }}</small></p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @endif
                  @endforeach
              </div>
          </div>
          </div>
  
      </div>
    </div>
  </section>
  


{{-- <section>
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
              <div class="col">
                  <div class="card mb-3 text-dark bg-light" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="{{asset('img/fotos/'.$director->foto)}}" class="img-fluid rounded-start" alt="..."> 
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">{{$director->cargo}}</h5>
                            <p class="card-text">{{$director->apenom}}</p>
                            <p class="card-text"><small class="text-muted">{{$director->email}}</small></p>
                            <p class="card-text"><small class="text-muted">Cel: {{$director->celular}}</small></p>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="col">
                  <div class="card mb-3 text-dark bg-light" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="{{asset('img/fotos/'.$jefeagi->foto)}}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">{{$jefeagi->cargo}}</h5>
                            <p class="card-text">{{$jefeagi->apenom}}</p>
                            <p class="card-text"><small class="text-muted">{{$jefeagi->email}}</small></p>
                            <p class="card-text"><small class="text-muted">Cel: {{$jefeagi->celular}}</small></p>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
            <div class="col">
                <div class="card mb-3 text-dark bg-light" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="{{asset('img/fotos/'.$jefeagp->foto)}}" class="img-fluid rounded-start" alt="...">  
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{$jefeagp->cargo}}</h5>
                          <p class="card-text">{{$jefeagp->apenom}}</p>
                          <p class="card-text"><small class="text-muted">{{$jefeagp->email}}</small></p>
                          <p class="card-text"><small class="text-muted">Cel: {{$jefeagp->celular}}</small></p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3 text-dark bg-light" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="{{asset('img/fotos/'.$jefeaga->foto)}}" class="img-fluid rounded-start" alt="..."> 
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{$jefeaga->cargo}}</h5>
                          <p class="card-text">{{$jefeaga->apenom}}</p>
                          <p class="card-text"><small class="text-muted">{{$jefeaga->email}}</small></p>
                          <p class="card-text"><small class="text-muted">Cel: {{$jefeaga->celular}}</small></p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col"></div>
            <div class="col-md-6">
                <div class="card mb-3 text-dark bg-light" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                          <img src="{{asset('img/fotos/'.$jefead2->foto)}}" class="img-fluid rounded-start" alt="...">  
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{$jefead2->cargo}}</h5>
                          <p class="card-text">{{$jefead2->apenom}}</p>
                          <p class="card-text"><small class="text-muted">{{$jefead2->email}}</small></p>
                          <p class="card-text"><small class="text-muted">Cel: {{$jefead2->celular}}</small></p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
          </div>
          <div class="row">
              <br>
              <div class="col">
                  <table class="table table-hover">
                      <thead>
                          <tr>
                              <th class="border border-slate-500">ID</th>
                              <th class="border border-slate-500" width="30%">Apellidos y Nombres</th>
                              <th class="border border-slate-500">FOTO</th>
                              <th class="border border-slate-500">DNI</th>
                              <th class="border border-slate-500">Area</th>
                              <th class="border border-slate-500">Cargo</th>
                              <th class="border border-slate-500">Email</th>
                              <th class="border border-slate-500">Celular</th>
                          </tr>
                      </thead>
                      <tbody>
                      @foreach ($registros as $item)
                      <tr>
                          <td class="border border-slate-500">{{ $item->id }}</td>
                          <td class="border border-slate-500">{{ $item->apenom }}</td>
                          <td class="border border-slate-500 p-1">
                          <!--       <img src="{{asset('img/fotos/'.$item->foto)}}" class="img-fluid thumbnail" /> -->
                          </td>
                          <td class="border border-slate-500">{{ $item->dni }}</td>
                          <td class="border border-slate-500">{{ $item->area }}</td>
                          <td class="border border-slate-500">{{ $item->cargo }}</td>
                          <td class="border border-slate-500">{{ $item->email }}</td>
                          <td class="border border-slate-500">{{ $item->celular }}</td>
                      </tr>
                      </tbody>
                      @endforeach
                  </table>
              </div>
          </div>
        </div>
    </div>
</div>
</section> --}}





<!-- END SECTION GALLERY -->

@endsection
