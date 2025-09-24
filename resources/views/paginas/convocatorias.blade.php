@extends('principal.plantilla')
@section('title', 'UGEL - DREHUANUCO')
@section('content')
    <!-- START SECTION BREADCRUMB -->
    <section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50"
        data-parallax-bg-image="{{ asset('img/bc.jpeg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h1>CONVOCATORIAS</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-sm-end">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Convocatoria</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION BANNER -->
    <section id="about" class="about pt-1">

        <section id="about" class="about pt-1">
            <div class="container">
                <form action="{{ route('convocatoriaweb') }}" method="GET">
                    <div class="row g-3 mb-4">
                        <div class="col-md-4">
                            <label class="form-label">Tipo de convocatoria</label>
                            <div class="input-group">
                                <select name="tipo" class="form-select form-select-lg custom-select">
                                    <option value="" selected>Todas las convocatorias</option>
                                    <option value="CAS" {{ request('tipo') == 'CAS' ? 'selected' : '' }}>CAS</option>
                                    <option value="CAP" {{ request('tipo') == 'CAP' ? 'selected' : '' }}>CAP</option>
                                    <option value="DOCENTE" {{ request('tipo') == 'DOCENTE' ? 'selected' : '' }}>Docente</option>
                                    <option value="DIRECTIVO" {{ request('tipo') == 'DIRECTIVO' ? 'selected' : '' }}>Directivo</option>
                                    <option value="LOCACION DE SERVICIO" {{ request('tipo') == 'LOCACION DE SERVICIO' ? 'selected' : '' }}>Locación de servicio</option>
                                    <option value="REASIGNACION" {{ request('tipo') == 'REASIGNACION' ? 'selected' : '' }}>Reasignación</option>
                                    <option value="276" {{ request('tipo') == '276' ? 'selected' : '' }}>276</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Buscar por titulo</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-search"></i></span>
                                <input type="text" name="buscarTitulo" value="{{ request('buscarTitulo') }}" class="form-control" placeholder="Busqueda por título">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Rango de fecha</label>
                            <div class="d-flex gap-2">
                                <input type="date" name="startDate" value="{{ request('startDate') }}" class="form-control" placeholder="From">
                                <input type="date" name="endDate" value="{{ request('endDate') }}" class="form-control" placeholder="To">
                            </div>
                        </div>
                    </div>
                
                    <div class="d-flex justify-content-end mb-4">
                        <button type="reset" class="btn btn-outline-secondary me-2" onclick="window.location='{{ route('convocatoriaweb') }}'">Limpiar</button>
                        <button type="submit" class="btn btn-primary">Aplicar filtro</button>
                    </div>
                </form>
                <div class="d-flex justify-content-start mb-4">
                            <button id="blinkBtn" class="btn btn-danger blinking-btn" onclick="window.location.href='https://drehuanuco.gob.pe/archivos/1738711175.docx'">
                           <span> DESCARGAR LOS ANEXOS 09 y 10 PARA LAS CONVOCATORIAS: LOCACION DE SERVICIOS</span>
                            </button>
                        </div>
                            </div>
            
            
        

        
        <div class="container">
            @foreach ($convocatorias as $row)
                <div class="card">
                    <div class="card-header text-light py-0">
                        <div class="row p-0">
                            <div class="col bg-warning pe-1 m-0" align="right">
                                <h5><i class="far fa-calendar-alt"></i></h5>
                            </div>
                            <div class="col-11 ps-0" style="background-color: #072044">
                                <h5 class="text-light">
                                    {{ $row->fecha_inicio }}&nbsp;|&nbsp;{{ $row->tipo . ' : ' . $row->titulo }}
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col" style="padding-left: 10px; margin-left:40px">
                                {!! $row->descripcion !!}
                            </div>
                            <div class="col">
                                <ul>
                                    @foreach ($row->archivos as $archivo)
                                        <li><a target="_blank" href="{{ $archivo['url_archivo'] }}"><i class="fa fa-file-pdf"></i> {{ $archivo['nom_archivo'] }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col">
                                <div class="alert alert-secondary p-1 px-5" role="alert">
                                    <i class="far fa-calendar-alt"></i>&nbsp;desde&nbsp;{{ $row->fecha_inicio }}
                                </div>
                            </div>
                            <div class="col">
                                <div class="alert alert-secondary p-1 px-5" role="alert">
                                    <i class="far fa-calendar-alt"></i>&nbsp;hasta&nbsp;{{ $row->fecha_termino }}
                                </div>
                            </div>
                            <div class="col">
                                <div class="alert alert-secondary p-1 px-5" role="alert">
                                    {{ $row->tipo }}
                                </div>
                            </div>
                            <div class="col">
                                <div class="alert text-bg-{{ $row->estado == 'ABIERTO' ? 'success' : 'secondary' }} p-1 text-center" role="alert">
                                    <i class="fas fa-clock"></i>&nbsp;{{ $row->estado }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br>
            @endforeach

            {{ $convocatorias->links() }}
            </table>


            <br>
            <br>
            <br>



        </div>
    </section><!-- End About Section -->
@endsection

<style>
  @keyframes pulseColors {
    0%, 100% {
      background-color: #dc3545;
      border-color: #dc3545;
      color: white;
    }
    50% {
      background-color: #f5c6cb;
      border-color: #f5c6cb;
      color: #721c24;
    }
    
  }
  .blinking-btn {
    animation: pulseColors 1.5s infinite;
  }
</style>

