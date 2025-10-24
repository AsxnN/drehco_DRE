@extends('principal.plantilla')
@section('title', 'DRE - HUANUCO')
@section('content')
        <!-- START SECTION BANNER -->
        <div class="news_ticker bg-warning">
            <div class="container">
                <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                    <span style="color:black; font-weight: bold">NOTICIAS RECIENTES </span>&nbsp;:&nbsp;
                    @foreach ($noticias as $item)
                        <a href="{{route('noticia', $item->id)}}" target="_blank">{{$item->titulo}}</a> ||
                    @endforeach
                </marquee>
            </div>
        </div>
        <div class="col-md-1"></div>
        <section class="banner_section p-0">
            <div class="row">
                <!-- Div izquierdo (con el espacio reducido) -->
                <div class="col-md-1"></div> <!-- Reduce el ancho de este div -->
                
                <!-- Carrusel -->
                <div id="carouselExampleControls" class="banner_content_wrap carousel slide col-md-10" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php $estado=false; ?>
                        @foreach($sliders as $row)
                            <div class="carousel-item {{ $estado==false ? 'active' : '' }} background_bg overlay_bg_10" 
                                 style="min-height: 60vh; 
                                        background-image: url('{{ asset('img/slider/'.$row->img_slider) }}'); 
                                        background-size: cover; 
                                        background-position: center; 
                                        width: 100%;">
                                <div class="col-md-1"></div>
                                <div class="banner_slide_content d-flex justify-content-center align-items-center">
                                    <div class="container">
                                        <!-- START CONTAINER -->
                                        <div class="row justify-content-center">
                                            <div class="col-lg-12 col-sm-12 text-center">
                                                <div class="banner_content animation text_white" data-animation="fadeIn" data-animation-delay="0.8s">
                                                    <h2 class="font-weight-bold animation text-uppercase" data-animation="zoomIn" data-animation-delay="1s">{{$row->titulo}}</h2>
                                                    <p class="animation" data-animation="zoomIn" data-animation-delay="1.5s">{{Str::lower($row->descripcioncorta)}}</p>
                                                    @if ($row->link!=null && $row->link!='')
                                                    <a class="btn btn-warning btn-sm animation rounded-0" href="{{$row->link}}" data-animation="zoomIn" data-animation-delay="1.8s">Leer Mas</a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END CONTAINER-->
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        <?php $estado = true ?>
                        @endforeach
                    </div>
        
                    <div class="carousel-nav">
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <i class="ion-chevron-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <i class="ion-chevron-right"></i>
                        </a>
                    </div>
                </div>
        
                <!-- Div derecho (con el espacio reducido) -->
                <div class="col-md-1"></div> <!-- Reduce el ancho de este div -->
            </div>
        </section>
        
        
        <div class="col-md-1"></div>
        <section class="container-fluid py-0">
    <div class="row py-1 mt-0">
        <div class="col-md-1"></div>

        <!-- Contenido principal de opciones (reducido a col-md-7) -->
        <div class="col-md-7 py-1">
            <section class="p-0">
                <div class="hero-options">
                    <div class="option-card green">
                        <a href="{{route('directorioweb')}}" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="40px" fill="#000000"><path d="M228.45-268.97q58.62-41.2 120.2-63.62Q410.23-355 480.2-355q69.98 0 132.31 22.99 62.34 22.98 119.71 63.23 39.68-50.23 57.57-101.49 17.89-51.25 17.89-109.73 0-138.08-94.78-232.88-94.78-94.8-232.83-94.8-138.06 0-232.9 94.8-94.85 94.8-94.85 232.88 0 58.26 17.95 109.42 17.95 51.16 58.18 101.61Zm251.43-173.36q-60.16 0-100.9-40.81-40.75-40.8-40.75-100.71 0-59.9 40.87-100.87 40.87-40.96 101.02-40.96 60.16 0 100.9 41.09 40.75 41.08 40.75 100.99 0 59.9-40.87 100.59-40.87 40.68-101.02 40.68Zm.2 378.16q-85.62 0-161.4-32.65t-132.49-89.35q-56.71-56.7-89.37-132.36-32.65-75.67-32.65-161.69 0-85.61 32.73-161.29 32.72-75.68 89.32-132.27 56.59-56.6 132.27-89.51 75.69-32.91 161.73-32.91 85.61 0 161.29 32.91 75.68 32.91 132.27 89.51 56.6 56.59 89.51 132.34 32.91 75.75 32.91 161.36 0 85.62-32.91 161.44-32.91 75.83-89.51 132.42-56.59 56.6-132.34 89.32-75.75 32.73-161.36 32.73Zm-.08-88.15q52.26 0 99.91-14.61 47.66-14.61 94.66-49.06-47.76-32.72-94.9-49.05-47.13-16.32-99.67-16.32t-99.39 16.32q-46.86 16.33-94.61 49.05 47 34.45 94.37 49.06 47.37 14.61 99.63 14.61Zm0-364.03q29.4 0 48.48-18.87 19.09-18.87 19.09-48.5 0-29.64-19.09-48.79-19.08-19.16-48.48-19.16t-48.48 19.16q-19.09 19.15-19.09 48.79 0 29.63 19.09 48.5 19.08 18.87 48.48 18.87Zm0-67.56Zm.57 367.26Z"/></svg><br>
                            Directorio Institucional
                        </a>
                    </div>
                    <div class="option-card green">
                        <a href="/resoluciones" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="40px" fill="#000000"><path d="M80-126.67v-66.66h800v66.66H80Zm40-120V-520h106.67v273.33H120Zm204 0V-720h106.67v473.33H324Zm204.67 0V-600h106.66v353.33H528.67Zm204.66 0V-840H840v593.33H733.33Z"/></svg><br>
                            Resoluciones
                        </a>
                    </div>
                    <div class="option-card green">
                        <a href="{{route('documentosdegestionweb')}}" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="40px" fill="#000000"><path d="M480-120q-151 0-255.5-46.5T120-280v-400q0-66 105.5-113T480-840q149 0 254.5 47T840-680v400q0 67-104.5 113.5T480-120Zm0-485q87 0 177.33-26.17 90.34-26.16 111.34-57.83-21.67-31-111.84-57.67-90.16-26.66-176.83-26.66-89 0-177.5 25.83T190.67-689q23.33 33.33 111.16 58.67Q389.67-605 480-605Zm-.67 209q42 0 83-4.33 41-4.34 78.5-12.84T712.17-434q33.83-12.33 61.16-27.67V-605q-28 15.33-61.83 27.67-33.83 12.33-71.67 20.83-37.83 8.5-78.16 13.17-40.34 4.66-82.34 4.66T396-543.33q-41.33-4.67-78.83-13.17t-70.84-20.83Q213-589.67 186.67-605v143.33Q213-446.33 246-434q33 12.33 70.5 20.83 37.5 8.5 78.83 12.84 41.34 4.33 84 4.33Zm.67 209.33q47.33 0 97.17-8 49.83-8 91.5-21.16Q710.33-229 739-245.17q28.67-16.16 34.33-33.16v-116Q746-379 712.17-367q-33.84 12-71.34 20.5t-78.16 12.83q-40.67 4.34-83.34 4.34-42.66 0-84-4.34Q354-338 316.5-346.5T246-367q-33-12-59.33-27.33v117q5 16.33 33.16 32.66Q248-228.33 290-215.5q42 12.83 92 20.83 50 8 98 8Z"/></svg><br>
                            Gestion de Documentos
                        </a>
                    </div>
                    <div class="option-card green">
                        <a href="{{route('galerias')}}" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="40px" fill="#000000"><path d="M479.67-264.67q73.33 0 123.5-50.16 50.16-50.17 50.16-123.5 0-73.34-50.16-123.17-50.17-49.83-123.5-49.83-73.34 0-123.17 49.83t-49.83 123.17q0 73.33 49.83 123.5 49.83 50.16 123.17 50.16Zm0-66.66q-45.67 0-76-30.67-30.34-30.67-30.34-76.33 0-45.67 30.34-76 30.33-30.34 76-30.34 45.66 0 76.33 30.34 30.67 30.33 30.67 76 0 45.66-30.67 76.33t-76.33 30.67ZM146.67-120q-27 0-46.84-19.83Q80-159.67 80-186.67v-502q0-26.33 19.83-46.5 19.84-20.16 46.84-20.16h140L360-840h240l73.33 84.67h140q26.34 0 46.5 20.16Q880-715 880-688.67v502q0 27-20.17 46.84Q839.67-120 813.33-120H146.67Zm0-66.67h666.66v-502H642.67l-73-84.66H390.33l-73 84.66H146.67v502ZM480-438Z"/></svg><br>
                            Galeria de Imagenes
                        </a>
                    </div>
                </div>

                <div class="hero-options">
                    <div class="option-card green">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="40px" fill="#000000"><path d="M474.06-140q4.81 0 11.31-2.22 6.5-2.21 11.06-6.78l334.74-335.74q14.11-14.14 21.75-32.93 7.65-18.8 7.65-38.73 0-19.64-7.65-39.22-7.64-19.57-21.75-34.21L667-794q-13.56-13-31.32-19.5-17.76-6.5-35.79-6.5-17.7 0-35.12 6.22-17.42 6.21-29.86 18.08l-14.04 14.61 77.61 78.05q14.69 16.26 26.11 37.3Q636-644.7 636-619.27q0 42.49-33.5 75.44-33.51 32.96-76.69 32.96-28.2 0-46.96-8.63t-34.71-24.73l-72.18-72.03-170.83 170.83q-5 4.43-7 10.24-2 5.81-2 12.12 0 12.64 8.22 20.85 8.22 8.22 20.88 8.22 6.34 0 12.12-3 5.78-3 9.78-7l132.35-132.35 42 42-131.31 131.3q-5.04 5.05-7.04 11.44-2 6.38-2 12.18 0 12.28 8.44 20.85Q294-310 306-310q6 0 11.78-2.5 5.79-2.5 10.38-6.53l131.19-131.75 42 42-131.87 131.31q-3.48 4.04-6.26 10.46-2.79 6.43-2.79 12.58 0 12.22 8.86 21.11 8.86 8.89 21.05 8.89 6.09 0 11.38-2.29 5.28-2.28 9.71-6.71l132.35-132.92 42 42L453.43-192q-4.43 5-6.71 11.39-2.29 6.38-2.29 11.18 0 14.22 8 21.83 8 7.6 21.63 7.6Zm.44 73q-35.89 0-64.44-24.78-28.54-24.78-35.8-62.6-32.87-5.45-56.15-29.01-23.28-23.57-28.85-55.87-31.74-6.13-54.52-29.35-22.78-23.22-28.91-54.52-37.57-7.26-62.42-35.38-24.85-28.13-24.85-65.95 0-19.24 7.86-38.55 7.85-19.31 21.54-33.9l224-224L490.43-603q8 8 17.53 12.78 9.52 4.79 19.61 4.79 12.67 0 23.77-11.5 11.09-11.5 11.09-24.09 0-5.85-4.06-13.91-4.07-8.07-11.5-16.07L402.7-795.17q-12.4-12.4-30.81-18.61-18.41-6.22-37.52-6.22-19.36 0-36.45 6.22-17.09 6.21-28.91 18.51l-146.4 145.36q-12.31 12.87-17.52 28.93-5.22 16.07-5.66 37.26.14 17.24 8.35 33.2 8.22 15.95 18.52 29.26l-52.04 52.04q-20-19.17-33.35-51.3-13.35-32.13-13.91-64.7-.57-34.52 10.65-64 11.22-29.48 33.91-52.17l144.79-145.35q23.13-23.13 54.94-34.2Q303.1-892 335.14-892q33.74 0 64.41 11.06 30.67 11.07 53.54 33.07l14.61 14.04 14.04-14.04q22.56-21.43 54.31-32.78Q567.8-892 600.4-892q32.6 0 63.77 11.91 31.18 11.92 54.31 35.05l167.13 166.56q23.71 23.48 35.55 56.42Q933-589.11 933-556.65q0 33.03-12.7 66.08-12.69 33.05-36.39 57.31L547.48-97.39q-14.7 14.69-33.49 22.54Q495.2-67 474.5-67ZM361.17-636.17Z"/></svg><br>
                            Integridad
                        </a>
                    </div>
                    <div class="option-card green">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="40px" fill="#000000"><path d="M513.33-513.33H812q-12.33-118-96.17-203.17Q632-801.67 513.33-812v298.67ZM446.67-148v-664Q319-799.67 232.83-704.17q-86.16 95.5-86.16 224.17t86.16 224.17Q319-160.33 446.67-148Zm66.66 0Q632-158 716-243.33q84-85.34 96-203.34H513.33V-148ZM480-480Zm0 400q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 155.83 31.5 72.84 31.5 127 85.67 54.17 54.16 85.67 127Q880-563 880-480q0 82.67-31.5 155.67-31.5 73-85.5 127.16Q709-143 636-111.5T480-80Z"/></svg><br>
                            SIAGIE
                        </a>
                    </div>
                    <div class="option-card green">
                        <a href="https://www.transparencia.gob.pe/reportes_directos/pte_transparencia_info_finan.aspx?id_entidad=14163&id_tema=19&ver=" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="40px" fill="#000000"><path d="M318.67-418v-298.67h100V-418l-50-48.67-50 48.67Zm196 80.67V-880h100v442.67l-100 100Zm-392 112.66v-328h100v228l-100 100ZM120-118l250-250 146.67 128.67L766-488.67h-80v-66.66h194V-362h-66.67v-80l-294 294-146.66-128-158 158H120Z"/></svg><br>
                            PRESUPUESTO
                        </a>
                    </div>
                    <div class="option-card green">
                        <a href="https://www.transparencia.gob.pe/reportes_directos/pte_transparencia_reg_visitas.aspx?id_entidad=14163&ver=&id_tema=500" target="_blank" class="small p-3">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="40px" fill="#000000"><path d="M228.45-268.97q58.62-41.2 120.2-63.62Q410.23-355 480.2-355q69.98 0 132.31 22.99 62.34 22.98 119.71 63.23 39.68-50.23 57.57-101.49 17.89-51.25 17.89-109.73 0-138.08-94.78-232.88-94.78-94.8-232.83-94.8-138.06 0-232.9 94.8-94.85 94.8-94.85 232.88 0 58.26 17.95 109.42 17.95 51.16 58.18 101.61Zm251.43-173.36q-60.16 0-100.9-40.81-40.75-40.8-40.75-100.71 0-59.9 40.87-100.87 40.87-40.96 101.02-40.96 60.16 0 100.9 41.09 40.75 41.08 40.75 100.99 0 59.9-40.87 100.59-40.87 40.68-101.02 40.68Zm.2 378.16q-85.62 0-161.4-32.65t-132.49-89.35q-56.71-56.7-89.37-132.36-32.65-75.67-32.65-161.69 0-85.61 32.73-161.29 32.72-75.68 89.32-132.27 56.59-56.6 132.27-89.51 75.69-32.91 161.73-32.91 85.61 0 161.29 32.91 75.68 32.91 132.27 89.51 56.6 56.59 89.51 132.34 32.91 75.75 32.91 161.36 0 85.62-32.91 161.44-32.91 75.83-89.51 132.42-56.59 56.6-132.34 89.32-75.75 32.73-161.36 32.73Zm-.08-88.15q52.26 0 99.91-14.61 47.66-14.61 94.66-49.06-47.76-32.72-94.9-49.05-47.13-16.32-99.67-16.32t-99.39 16.32q-46.86 16.33-94.61 49.05 47 34.45 94.37 49.06 47.37 14.61 99.63 14.61Zm0-364.03q29.4 0 48.48-18.87 19.09-18.87 19.09-48.5 0-29.64-19.09-48.79-19.08-19.16-48.48-19.16t-48.48 19.16q-19.09 19.15-19.09 48.79 0 29.63 19.09 48.5 19.08 18.87 48.48 18.87Zm0-67.56Zm.57 367.26Z"/></svg><br>
                            REGISTRO DE VISITAS
                        </a>
                    </div>
                </div>
                
                <div class="hero-options">
                    <div class="option-card green">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="40px" fill="#000000"><path d="M560-570.67v-54.66q33-14 67.5-21t72.5-7q26 0 51 4t49 10v50.66q-24-9-48.5-13.5t-51.5-4.5q-38 0-73 9.5t-67 26.5Zm0 220V-406q33-13.67 67.5-20.5t72.5-6.83q26 0 51 4t49 10v50.66q-24-9-48.5-13.5t-51.5-4.5q-38 0-73 9t-67 27Zm0-110v-54.66q33-14 67.5-21t72.5-7q26 0 51 4t49 10v50.66q-24-9-48.5-13.5t-51.5-4.5q-38 0-73 9.5t-67 26.5Zm-308 154q51.38 0 100.02 11.84Q400.67-283 448-259.33v-416q-43.67-28-94.08-43t-101.92-15q-37.33 0-73.5 8.66Q142.33-716 106.67-702v421.33Q139-294 176.83-300.33q37.84-6.34 75.17-6.34Zm262.67 47.34q48-23.67 94.83-35.5 46.83-11.84 98.5-11.84 37.33 0 75.83 6t69.5 16.67v-418q-33.66-16-70.71-23.67-37.05-7.66-74.62-7.66-51.67 0-100.67 15t-92.66 43v416ZM481.33-160q-50-38-108.66-58.67Q314-239.33 252-239.33q-38.36 0-75.35 9.66-36.98 9.67-72.65 25-22.4 11-43.2-2.33Q40-220.33 40-245.33v-469.34q0-13.66 6.5-25.33Q53-751.67 66-758q43.33-21.33 90.26-31.67Q203.19-800 252-800q61.33 0 119.5 16.33 58.17 16.34 109.83 49.67 51-33.33 108.5-49.67Q647.33-800 708-800q48.58 0 95.29 10.33Q850-779.33 893.33-758q13 6.33 19.84 18 6.83 11.67 6.83 25.33v469.34q0 26.26-21.5 39.96t-43.17.7q-35-16-71.98-25.33-36.99-9.33-75.35-9.33-62 0-119.33 21-57.34 21-107.34 58.33Zm-204-330.67Z"/></svg><br>
                            APRENDE HUÁNUCO
                        </a>
                    </div>
                    <div class="option-card green">
                        <a href="{{route('convivenciasinviolencia')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="40px" fill="#000000"><path d="M186.67-186.67H235L680-631l-48.33-48.33-445 444.33v48.33ZM120-120v-142l559.33-558.33q9.34-9 21.5-14 12.17-5 25.5-5 12.67 0 25 5 12.34 5 22 14.33L821-772q10 9.67 14.5 22t4.5 24.67q0 12.66-4.83 25.16-4.84 12.5-14.17 21.84L262-120H120Zm652.67-606-46-46 46 46Zm-117 71-24-24.33L680-631l-24.33-24Z"/></svg><br>
                            BOLETIN INFORMATIVO
                        </a>
                    </div>
                    <div class="option-card green">
                        <a href="https://drive.google.com/file/d/1L9Wgx-IQWM0f_JGIHMTa7tFCDRF1_nXB/view" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="40px" fill="#000000"><path d="M446.67-280H280q-83 0-141.5-58.5T80-480q0-83 58.5-141.5T280-680h166.67v66.67H280q-55.56 0-94.44 38.84-38.89 38.84-38.89 94.33 0 55.49 38.89 94.49 38.88 39 94.44 39h166.67V-280ZM323.33-446.67v-66.66h313.34v66.66H323.33Zm190 166.67v-66.67H680q55.56 0 94.44-38.84 38.89-38.84 38.89-94.33 0-55.49-38.89-94.49-38.88-39-94.44-39H513.33V-680H680q83 0 141.5 58.5T880-480q0 83-58.5 141.5T680-280H513.33Z"/></svg><br>
                            DIRECTORIO DRE-UGEL
                        </a>
                    </div>
                    <div class="option-card green">
                        <a href="https://gestion.drehuanuco.gob.pe/tablas/evepublics" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="40px" fill="#000000"><path d="M146.67-160q-26.34 0-46.5-20.17Q80-200.33 80-226.67v-506.66q0-26.34 20.17-46.5Q120.33-800 146.67-800H414l66.67 66.67h332.66q26.34 0 46.5 20.16Q880-693 880-666.67H452.33l-66.66-66.66h-239v506.66l100-373.33H940L834.33-209.67q-6.66 24.67-24.5 37.17Q792-160 766.67-160h-620Zm70-66.67H770l80-306.66H296.67l-80 306.66Zm0 0 80-306.66-80 306.66Zm-70-440v-66.66 66.66Z"/></svg><br>
                            AGENDA DIRECTORAL
                        </a>
                    </div>
                </div>
            </section>
        </div>

        <!-- Nueva columna para imagen (col-md-3) -->
        <div class="col-md-3 py-1 d-flex align-items-stretch">
            <div class="w-100 d-flex flex-column justify-content-center">
                <!-- Contenedor clickeable que redirige a EPR -->
                <a href="{{ route('epr.index') }}" class="d-block text-decoration-none" style="height: 100%;">
                    <div class="imagen-lateral-container" style="height: 100%; min-height: 400px; background: #f8f9fa; border: 2px dashed #dee2e6; border-radius: 8px; display: flex; align-items: center; justify-content: center; position: relative; overflow: hidden; transition: all 0.3s ease; cursor: pointer;">
                        
                        <!-- Opción 1: Imagen estática -->
                        {{-- <img src="{{ asset('img/imagen-lateral.jpg') }}" alt="Imagen lateral" class="img-fluid w-100 h-100" style="object-fit: cover; border-radius: 6px;"> --}}
                        
                        <!-- Opción 2: Placeholder para que agregues tu imagen -->
                        <div class="text-center p-4">
                            <div class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#6c757d" viewBox="0 0 256 256">
                                    <path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM40,56H216V158.75l-26.07-26.06a16,16,0,0,0-22.63,0l-20,20-44-44a16,16,0,0,0-22.62,0L40,149.37ZM216,200H40V180.68l52.69-52.69,44,44a16,16,0,0,0,22.62,0l20-20L216,188.68Z"/>
                                </svg>
                            </div>
                            <h6 class="text-muted mb-2">EPR - Documentos</h6>
                            <small class="text-muted">Click para acceder a los<br>documentos EPR digitales</small>
                        </div>
        
                        <!-- Opción 3: Imagen dinámica desde base de datos con enlace a EPR -->
                        {{-- @if(isset($imagenLateral) && $imagenLateral)
                            <img src="{{ asset('img/lateral/' . $imagenLateral->imagen) }}" alt="{{ $imagenLateral->alt ?? 'Documentos EPR' }}" class="img-fluid w-100 h-100" style="object-fit: cover; border-radius: 6px;">
                            <!-- Overlay con texto EPR -->
                            <div class="position-absolute" style="bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.7)); padding: 20px; color: white; text-align: center;">
                                <h6 class="mb-1">EPR - Documentos</h6>
                                <small>Click para acceder</small>
                            </div>
                        @else
                            <div class="text-center p-4">
                                <div class="mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="#6c757d" viewBox="0 0 256 256">
                                        <path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40ZM40,56H216V158.75l-26.07-26.06a16,16,0,0,0-22.63,0l-20,20-44-44a16,16,0,0,0-22.62,0L40,149.37ZM216,200H40V180.68l52.69-52.69,44,44a16,16,0,0,0,22.62,0l20-20L216,188.68Z"/>
                                    </svg>
                                </div>
                                <h6 class="text-muted mb-2">EPR - Documentos</h6>
                                <small class="text-muted">Click para acceder a los documentos EPR</small>
                            </div>
                        @endif --}}
                    </div>
                </a>
            </div>
        </div>

        <div class="col-md-1"></div>
    </div>
</section>
        <section class="background_bg bg_blue2 bg_fixed p-2" data-parallax-bg-image="{{asset('plantillas/eduglobal/assets/images/pattern_bg4.png')}}">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
                    <div class="col">
                        <div class="box_counter counter_style1 text_white text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                            <div class="counter_icon">
                                <img src="{{ asset('plantillas/eduglobal/assets/images/counter_icon1.png') }}" alt="counter_icon1" />
                            </div>
                            <div class="counter_content">
                                <h3 class="counter_text"><span class="counter">252392</span>+</h3>
                                <p><a target="_blank" href="https://docs.google.com/spreadsheets/d/1ZsMZTp6z_-k2CJB-31A7gf3UKE0XLfzf/edit?usp=share_link&ouid=115124098271698375348&rtpof=true&sd=true">Estudiantes</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_counter counter_style1 text_white text-center animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                            <div class="counter_icon">
                                <img src="{{ asset('plantillas/eduglobal/assets/images/counter_icon2.png') }}" alt="counter_icon2" />
                            </div>
                            <div class="counter_content">
                                <h3 class="counter_text"><span class="counter">4415</span></h3>
                                <p><a target="_blank" href="https://docs.google.com/spreadsheets/d/1meqfy82jyk-qrXsaWpndBni3jfBf3koZ/edit?usp=share_link&ouid=115124098271698375348&rtpof=true&sd=true">Colegios</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_counter counter_style1 text_white text-center animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                            <div class="counter_icon">
                                <img src="{{ asset('plantillas/eduglobal/assets/images/counter_icon3.png') }}" alt="counter_icon3" />
                            </div>
                            <div class="counter_content">
                                <h3 class="counter_text"><span class="counter">17042</span>+</h3>
                                <p><a target="_blank" href="https://docs.google.com/spreadsheets/d/1kM5rohSYy0zS8kqak7sWWflUPun9n6jc/edit?usp=share_link&ouid=115124098271698375348&rtpof=true&sd=true">Docentes</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box_counter counter_style1 text_white text-center animation" data-animation="fadeInUp" data-animation-delay="0.05s">
                            <div class="counter_icon">
                                <img src="{{ asset('plantillas/eduglobal/assets/images/counter_icon4.png') }}" alt="counter_icon4" />
                            </div>
                            <div class="counter_content">
                                <h3 class="counter_text"><span class="counter">11</span></h3>
                                <p>Ugeles</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION COUNTER -->
        <!-- START SECTION COMUNICADOS -->

        {{-- <section class="bg_gray mb-0">
            <div class="w-full h-full">
                <div class="row">
                    <div class="col-md-1"></div> <!-- espacio lateral izquierdo -->
                    <div class="col-md-10">
                        
                        <!-- Encabezado -->
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex align-items-center text-start animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                                    <div class="text-white rounded-pill px-3 py-1 me-2" style="background-color: #0069d9;">Comunicados</div>
                                    <hr class="flex-grow-1" style="border-color: #0069d9;">
                                </div>
                            </div>
                        </div>
        
                        <!-- Contenido dinámico -->
                        <div class="row">
                            @foreach ($comunicados as $item)
                                <div class="col-lg-4 col-sm-6">
                                    <div class="team_box team_style2 box_shadow1 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                                        <div class="team_img">
                                            <img src="{{asset('img/comunicados/'.$item->imagen)}}" alt="{{$item->titulo}}">
                                        </div>
                                        <div class="team_title text-center">
                                            <h5><a href="{{$item->url ?? '#'}}">{{$item->titulo}}</a></h5>
                                            @if ($item->url != '' && $item->url != null)
                                                <a target="_blank" href="{{$item->url}}" title="Ver Más"><i class="fa fa-eye"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
        
                    </div>
                    <div class="col-md-1"></div> <!-- espacio lateral derecho -->
                </div>
            </div>
        </section> --}}
        

        <section class="container-fluid py-0">
            <div class="row py-1 mt-0">
                <div class="col-md-1"></div>
                    <div class="col-md-10 py-1">
                        <section class="pt-0">
                            <div class="w-full h-full">
                                <section class="pt-0 ptt">
                                    <div class="container-card">
                                        <section class="">
                                            <div class="container-card">
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
                                                                                            <img class="img-fluid" alt="100%x280" src="{{ asset('img/comunicados/'.$item->imagen) }}" alt="{{$item->titulo}}" loading="lazy">
                                                                                        </div>
                                                                                        <div class="card-body">
                                                                                            <h3 class="card-title txt-ah3">{{ $item->titulo }}</h3>
                                                                                            @if($item->url != '' && $item->url != null)
                                                                                                <a class="txt-ah3" target="_blank" href="{{$item->url}}" title="Ver Más"><i class="fa fa-eye"></i></a>
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
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
        <!-- END SECTION COMUNICADOS -->



        <!-- START SECTION GALERIA -->
<section class="bg_gray mt-1">
  <div class="container-fluid px-3">
    <div class="row" style="min-height: 600px; display: flex; align-items: stretch;">
      <div class="col-md-1"></div> <!-- espacio lateral izquierdo -->

      <!-- Columna 1: Video principal + lista -->
      <div class="col-md-4 d-flex flex-column h-100">
        <div class="d-flex align-items-center text-start pb-3">
          <div class="text-white rounded-pill px-3 py-1 me-2" style="background-color: #0069d9;">Galería de Videos</div>
          <hr class="flex-grow-1" style="border-color: #0069d9;">
        </div>

        <!-- Video principal -->
        <div class="embed-responsive embed-responsive-16by9 flex-grow-1" id="videoPrincipalContainer" style="min-height: 200px;">
          @php
            $primerVideo = $VideoEmbevidos->first();
          @endphp
          {!! $primerVideo->contenido !!}
        </div>
        <?php
        foreach ($VideoEmbevidos as $video) {
            $video->contenido_base64 = base64_encode($video->contenido);
        }?>
        <!-- Lista de videos -->
        <ul class="list-group" id="listaVideos" style="overflow-y: auto; max-height: 250px;">
          @foreach ($VideoEmbevidos as $video)
            <li class="list-group-item list-group-item-action" 
                style="cursor: pointer;" 
                data-video-base64="{{ $video->contenido_base64 }}">
              Video {{ $loop->iteration }}: {{ $video->titulo }}
            </li>
          @endforeach
        </ul>
      </div>

      <!-- Columna 2: TikTok Embed -->
      <div class="col-md-3 mb-4 d-flex flex-column h-100">
        <div class="d-flex align-items-center text-start pb-3">
          <div class="text-white rounded-pill px-3 py-1 me-2" style="background-color: #0069d9;">TikTok</div>
          <hr class="flex-grow-1" style="border-color: #0069d9;">
        </div>
        <div class="flex-grow-1" style="overflow-y: auto;">
          <blockquote class="tiktok-embed" 
              style="margin: 0; padding: 0; border: none; height: 100%;" 
              cite="https://www.tiktok.com/@drehuanuco" 
              data-unique-id="drehuanuco" 
              data-embed-from="embed_page" 
              data-embed-type="creator">
            <section style="margin: 0; padding: 0;">
              <a target="_blank" href="https://www.tiktok.com/@drehuanuco?refer=creator_embed">@drehuanuco</a>
            </section>
          </blockquote>
        </div>
      </div>

      <!-- Columna 3: Facebook Page -->
      <div class="col-md-3 mb-4 d-flex flex-column h-100">
        <div class="d-flex align-items-center text-start pb-3">
          <div class="text-white rounded-pill px-3 py-1 me-2" style="background-color: #0069d9;">Facebook</div>
          <hr class="flex-grow-1" style="border-color: #0069d9;">
        </div>

        <div class="flex-grow-1" style="overflow-y: auto;">
          <div class="fb-page"
               data-href="https://www.facebook.com/direccionregionaldeeducacion"
               data-tabs="timeline"
               data-width=""
               data-height=""
               data-small-header="false"
               data-adapt-container-width="true"
               data-hide-cover="false"
               data-show-facepile="true"
               style="height: 100%;">
            <blockquote cite="https://www.facebook.com/direccionregionaldeeducacion" class="fb-xfbml-parse-ignore">
              <a href="https://www.facebook.com/direccionregionaldeeducacion">Educación DreHco</a>
            </blockquote>
          </div>
        </div>
      </div>

      <div class="col-md-1"></div> <!-- espacio lateral derecho -->
    </div>
  </div>
</section>


        <!-- END SECTION GALERIA -->
        
        

    <!-- START SECTION CLIENT LOGO enlaces externos -->
    {{-- <section class="light_gray_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                <div class="cl_logo_slider carousel_slider owl-carousel owl-theme" data-margin="15" data-loop="true" data-autoplay="true" data-dots="false" data-responsive='{"0":{"items": "2"}, "380":{"items": "3"}, "600":{"items": "4"}, "1000":{"items": "5"}, "1199":{"items": "6"}}'>
                    <div class="item">
                      <a href="#"><img src="{{ asset('plantillas/eduglobal/assets/images/cl_logo1.png') }}" alt="cl_logo1"/></a>
                      </div>
                      <div class="item">
                      <a href="#"><img src="{{ asset('plantillas/eduglobal/assets/images/cl_logo2.png') }}" alt="cl_logo2"/></a>
                      </div>
                      <div class="item">
                      <a href="#"><img src="{{ asset('plantillas/eduglobal/assets/images/cl_logo3.png') }}" alt="cl_logo3"/></a>
                      </div>
                      <div class="item">
                      <a href="#"><img src="{{ asset('plantillas/eduglobal/assets/images/cl_logo4.png') }}" alt="cl_logo4"/></a>
                      </div>
                      <div class="item">
                      <a href="#"><img src="{{ asset('plantillas/eduglobal/assets/images/cl_logo5.png') }}" alt="cl_logo5"/></a>
                      </div>
                      <div class="item">
                      <a href="#"><img src="{{ asset('plantillas/eduglobal/assets/images/cl_logo2.png') }}" alt="cl_logo2"/></a>
                      </div>
                </div>
            </div>
        </div>
    </div>
    </section> --}}
    <!-- END SECTION CLIENT LOGO -->


    <?php if(isset($popup)){ ?>
        <div class="modal fade show" id="modalpopup" tabindex="-1" aria-labelledby="modalpopupTitle" style="display: block; padding-right: 17px;" aria-modal="true" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content p-0">
                <div class="modal-header p-0">
                    <button type="button" class="btn btn-warning btn-sm p-1" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body p-0" title="{{$popup->titulo}}">
                    <div id="carouselExampleControls2" class="banner_content_wrap carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <?php $estado=false; ?>
                          @foreach($imagenes as $row)
                            <div class="carousel-item {{ $estado==false ? 'active' : '' }} p-0" data-img-src="">
                                <a target="_blank" href="{{$row->enlace}}">
                                    <img src="{{ asset('img/popup/'.$row->imagen) }}" class="w-fluid" width="" alt="">
                                </a>
                            </div>
                          <?php $estado = true ?>
                          @endforeach
                        </div>
                        <div class="carousel-nav">
                            <a class="carousel-control-prev" style="background: blue" href="#carouselExampleControls2" role="button" data-slide="prev">
                                <i class="ion-chevron-left"></i>
                            </a>
                            <a class="carousel-control-next" style="background: blue" href="#carouselExampleControls2" role="button" data-slide="next">
                                <i class="ion-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        <?php }  ?>
        
        <div class="visitas text-center mt-2">
            <span class="badge">Visitas: {{ $contador }}</span>
        </div>
@endsection

<!--Se coloca aquí el estilo por problemas de conexión con el style.css  -->
<style>
    .visitas{
        position: fixed;
        left: 0px;
        bottom: 0px;
        z-index: 9999;
        background-color: #007bff;
    }
    .visitas .badge {
        color: white;
        font-size: 14px;
        padding: 10px 20px;
    }
    
    /* Contenedor principal de opciones */
.hero-options {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 20px;
    margin-bottom: 0px;
    padding: 10px 0;
}

/* Cuadro individual de opción */
.option-card {
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
    border: 2px solid #e9ecef;
    border-radius: 12px;
    padding: 20px 10px;
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.07);
    min-height: 140px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
    animation: fadeInUp 0.6s ease-out;
}

/* Efecto hover universal */
.option-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    border-color: var(--hover-color, #007bff);
}

/* Enlaces dentro de las tarjetas */
.option-card .card-link {
    text-decoration: none;
    color: #2c3e50;
    font-weight: 600;
    font-size: 13px;
    line-height: 1.3;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100%;
    width: 100%;
    transition: color 0.3s ease;
}

/* Iconos SVG */
.option-card svg {
    margin-bottom: 10px;
    transition: all 0.3s ease;
    fill: #495057;
}

/* Efectos hover para enlaces e iconos */
.option-card:hover .card-link {
    color: var(--hover-color, #007bff);
}

.option-card:hover svg {
    fill: var(--hover-color, #007bff);
    transform: scale(1.1);
}

/* Efecto de brillo */
.option-card:before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
    transition: left 0.5s;
}

.option-card:hover:before {
    left: 100%;
}

/* Variables CSS para colores específicos */
.option-card.green { --hover-color: #28a745; }
.option-card.yellow { --hover-color: #ffc107; }
.option-card.cyan { --hover-color: #17a2b8; }
.option-card.pink { --hover-color: #e83e8c; }
.option-card.purple { --hover-color: #6f42c1; }
.option-card.orange { --hover-color: #fd7e14; }
.option-card.teal { --hover-color: #20c997; }
.option-card.red { --hover-color: #dc3545; }
.option-card.indigo { --hover-color: #6610f2; }
.option-card.blue { --hover-color: #007bff; }

/* Responsive Design */
@media (max-width: 1200px) {
    .hero-options {
        grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
        gap: 15px;
    }
    
    .option-card {
        padding: 20px 12px;
        min-height: 120px;
    }
    
    .option-card .card-link {
        font-size: 12px;
    }
}

@media (max-width: 768px) {
    .hero-options {
        grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
        gap: 12px;
        padding: 15px 0;
    }
    
    .option-card {
        padding: 18px 10px;
        min-height: 100px;
    }
    
    .option-card .card-link {
        font-size: 11px;
    }
    
    .option-card svg {
        height: 25px;
        width: 35px;
    }
}

@media (max-width: 576px) {
    .hero-options {
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }
    
    .option-card {
        padding: 5px 8px;
        min-height: 50px;
    }
    
    .option-card .card-link {
        font-size: 6px;
    }
    
    .option-card svg {
        height: 12px;
        width: 16px;
        margin-bottom: 4px;
    }
}

/* Animación de entrada escalonada */
.option-card:nth-child(1) { animation-delay: 0.1s; }
.option-card:nth-child(2) { animation-delay: 0.2s; }
.option-card:nth-child(3) { animation-delay: 0.3s; }
.option-card:nth-child(4) { animation-delay: 0.4s; }
.option-card:nth-child(5) { animation-delay: 0.5s; }
.option-card:nth-child(6) { animation-delay: 0.6s; }

.hero-options:nth-of-type(2) .option-card:nth-child(1) { animation-delay: 0.7s; }
.hero-options:nth-of-type(2) .option-card:nth-child(2) { animation-delay: 0.8s; }
.hero-options:nth-of-type(2) .option-card:nth-child(3) { animation-delay: 0.9s; }
.hero-options:nth-of-type(2) .option-card:nth-child(4) { animation-delay: 1.0s; }
.hero-options:nth-of-type(2) .option-card:nth-child(5) { animation-delay: 1.1s; }
.hero-options:nth-of-type(2) .option-card:nth-child(6) { animation-delay: 1.2s; }

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<!-- Scripts -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const listaVideos = document.getElementById('listaVideos');
    const videoPrincipalContainer = document.getElementById('videoPrincipalContainer');

    listaVideos.addEventListener('click', function(e) {
        if (e.target && e.target.nodeName === "LI") {
            const videoBase64 = e.target.getAttribute('data-video-base64');
            const videoHtml = atob(videoBase64);
            videoPrincipalContainer.innerHTML = videoHtml;
        }
    });
});
</script>

<!-- Facebook SDK (solo una vez en la página) -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" 
  src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v16.0" nonce="9urXt4qV"></script>

<!-- TikTok embed script (solo una vez en la página) -->
<script async src="https://www.tiktok.com/embed.js"></script>
