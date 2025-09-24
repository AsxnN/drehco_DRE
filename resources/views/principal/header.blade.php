

<!-- LOADER -->

<div id="preloader">

  <span class="spinner"></span>

  <div class="loader-section section-left"></div>

  <div class="loader-section section-right"></div>

</div>

<!-- END LOADER -->



<div class="modal fade lr_popup" id="Login" tabindex="-1" role="dialog" aria-hidden="true">

<div class="modal-dialog modal-lg modal-dialog-centered" role="document">

    <div class="modal-content border-0">

      <div class="modal-body">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                <span aria-hidden="true">×</span>

              </button>

            <form method="POST" action="{{ route('login') }}">

                @csrf

              <div class="row no-gutters">

                <div class="col-lg-5">

                    <div class="h-100 background_bg radius_ltlb_5" data-img-src="assets/images/login_img.jpg"></div>

                  </div>

                <div class="col-lg-7">

                    <div class="padding_eight_all">

                        <ul class="nav nav-tabs" role="tablist">

                            <li class="nav-item">

                                <a class="nav-link active" id="login-tab1" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Dre Huánuco</a>

                            </li>

                        </ul>

                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="login" role="tabpanel">

                                <div class="heading_s1 mb-3">

                                    <h4>INTRANET</h4>

                                </div>

                                <form method="post" class="login form_style2">

                                    <div class="form-group">

                                        <input type="text" required="" class="form-control" name="email" placeholder="Email" autofocus>

                                    </div>

                                    <div class="form-group">

                                        <input class="form-control" required="" type="password" name="password" placeholder="Password">

                                    </div>

                                    <div class="form-group">

                                        <button type="submit" class="btn btn-default btn-block rounded-0" name="login">Ingresar</button>

                                    </div>

                                    <ul class="btn-login list_none text-center">
                                        <li><a href="https://www.facebook.com/direccionregionaldeeducacion" class="btn btn-facebook rounded-0"><i class="ion-social-facebook"></i>Facebook</a></li>
                                        <li><a href="#" class="btn btn-google rounded-0"><i class="ion-social-googleplus"></i>Google</a></li>
                                    </ul>


                                </form>

                            </div>

                        </div>

                    </div>

                </div>

              </div>

            </form>

        </div>

      </div>

  </div>

</div>



<!-- START HEADER -->

<header class="header_wrap dark_skin">

<div class="top-header bg_blue_dark2 light_skin">

      <div class="container">

          <div class="row align-items-center">

              <div class="col-md-5">

                  <ul class="contact_detail list_none text-center text-md-left">

                     <li><a href="#"><i class="ti-time"></i>HORARIO DE ATENCION:  Lunes - Viernes: 8:30 am - 5:30 pm</a></li>
                      
                  </ul>

              </div>

              <div class="col-md-6">

                <div class="d-flex flex-wrap align-items-center justify-content-md-end justify-content-center mt-2 mt-md-0">

                      <ul class="list_none social_icons social_white text-center text-md-right">
                         
                        <li><a href="#"><i class="ti-location-pin"></i></a></li>
                       
                      </ul>

                      <ul class="list_none header_list border_list ml-1">

                          <li><a href="{{ route('intranet') }}" data-toggle="{{ Auth::user()==null ? 'modal' : '' }}" data-target="#Login">Intranet</a></li>

                          <li><a href="https://auladre.drehuanuco.gob.pe/login/index.php" class="btn btn-default btn-sm rounded-8"><i style="color: #ffffff" >Aula Virtual</i></a></li>

                          <li><a target="_blank" href="https://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=14163#.Y9SgbXbMLrd" class=""><img src="{{asset('img/portal.png')}}" height="40px" alt=""></a></li>

                      </ul>

                  </div>

              </div>

          </div>

      </div>

  </div>

  <div class="container">

      <nav class="navbar navbar-expand-lg">

          <a class="navbar-brand" href="/">

              <img class="logo_dark" src="{{ asset('img/logonuevo.png') }}" alt="logonuevo" width="280px" />

          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>

          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">



            <ul class="navbar-nav">

                <li>

                    <a class="nav-link active" href="<?= URL::to('/') ?>">HOME</a>

                </li>

                <?php foreach($menus as $row){ ?>

                    <?php if($row->link_menu=='#'){ ?>

                        <li class="dropdown">

                            <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">{{$row->nom_menu}}</a>

                            <div class="dropdown-menu">

                                <ul>

                                    <?php foreach($submenus as $submenu){

                                        if($submenu->categoriamenu==$row->id){ ?>

                                    <li><a class="dropdown-item nav-link nav_item" href="{{$submenu->link_menu}}">{{$submenu->nom_menu}}</a></li>

                                    <?php } } ?>

                                </ul>

                            </div>

                        </li>

                <?php }else{ ?>

                    <li>

                        <a class="nav-link" href="{{$row->link_menu}}">{{$row->nom_menu}}</a>

                    </li>

                <?php } } ?>





              </ul>

          </div>

          <ul class="navbar-nav attr-nav align-items-center">

              <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="ion-ios-search-strong"></i></a>

                  <div class="search-overlay">

                      <div class="search_wrap">

                          <form>

                              <input type="text" placeholder="Search" class="form-control" id="search_input">

                              <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>

                          </form>

                      </div>

                  </div>

              </li>

          </ul>

          <a class="navbar-brand" href="/">

              <img class="logo_dark" src="{{ asset('img/logo_gobierno.svg') }}" alt="logogobierno" width="160px" />

          </a>

      </nav>

  </div>

<style>
.micontenido {
  display: flex;
  overflow-x: auto;
  max-width: 1142px;
  height: 41px;
  justify-content: left;
  -ms-overflow-style: none; /* Para IE y Edge */
  scrollbar-width: none;  /*Para Firefox */
}
.micontenido::-webkit-scrollbar {
  display: none;  /*Para Chrome, Safari y Opera */
}

.box {
  flex: 0 0 285px;
  height: 40px;
}

.custom-h {
    color: white;
    height: auto;
    transition: background-color 0.3s ease, color 0.3s ease;
    font-size: 12px;
}
</style>

<div class="nav-access row">
    <div class="col-md-1"></div>
        <div class=" col-md-10">
            {{-- <div class="micontenido">
                <a href="http://digital.regionhuanuco.gob.pe/login"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M43.83-612.22v-151.34q0-51.3 35.82-87.13 35.83-35.83 87.13-35.83h626.44q51.3 0 87.13 35.83 35.82 35.83 35.82 87.13v151.34H793.22v-151.34H166.78v151.34H43.83ZM166.78-209q-51.3 0-87.13-35.09-35.82-35.08-35.82-86.43v-184.74h122.95v183.3h626.44v-183.3h122.95v184.74q0 51.35-35.82 86.43Q844.52-209 793.22-209H166.78ZM4.09-63.56V-169h951.82v105.44H4.09ZM480-548.04ZM43.83-515.26v-96.96H320q13.34 0 25.48 6.66 12.13 6.65 18.56 19.52l38.53 79.48 113.39-198.92q5.87-12.3 18.02-18.74 12.15-6.43 25.96-6.43t25.93 6.15q12.11 6.15 18.17 18.46l46.13 93.82h266v96.96H627.48q-17.3 0-32.26-9.2-14.96-9.19-22.65-24.89l-15-29.56-113.53 196.34q-6.43 13.16-18.53 20.23-12.09 7.08-25.28 7.08-13.66 0-25.75-6.94-12.09-6.93-18.52-19.8l-66.13-133.26h-246Z"/></svg>&nbsp;&nbsp;SGD DRE</a>
                <a href="http://digital.regionhuanuco.gob.pe/registro/mesa-partes-virtual/57"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M310.09-227.96h340.26v-101.69H310.09v101.69Zm0-166.61h339.82V-495.7H310.09v101.13ZM243.91-40.09q-50.5 0-86.73-35.83-36.22-35.82-36.22-87.12v-633.92q0-51.3 36.22-87.12 36.23-35.83 86.73-35.83h315.96L839.04-642.3v479.26q0 51.3-36.22 87.12-36.23 35.83-86.73 35.83H243.91ZM497.7-579.13v-217.83H243.91v633.92h472.18v-416.09H497.7ZM243.91-796.96v217.83-217.83 633.92-633.92Z"/></svg>&nbsp;&nbsp;MESA DE PARTES DRE</a>
                <a href="https://drehuanuco.gob.pe/paginas/39"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M310.09-227.96h340.26v-101.69H310.09v101.69Zm0-166.61h339.82V-495.7H310.09v101.13ZM243.91-40.09q-50.5 0-86.73-35.83-36.22-35.82-36.22-87.12v-633.92q0-51.3 36.22-87.12 36.23-35.83 86.73-35.83h315.96L839.04-642.3v479.26q0 51.3-36.22 87.12-36.23 35.83-86.73 35.83H243.91ZM497.7-579.13v-217.83H243.91v633.92h472.18v-416.09H497.7ZM243.91-796.96v217.83-217.83 633.92-633.92Z"/></svg>&nbsp;&nbsp;MESA DE PARTES UGELES</a>
                <a href="https://webmail.drehuanuco.gob.pe/"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M163.04-120.96q-51.3 0-87.12-36.22-35.83-36.23-35.83-86.73v-472.18q0-50.5 35.83-86.73 35.82-36.22 87.12-36.22h633.92q51.3 0 87.12 36.22 35.83 36.23 35.83 86.73v472.18q0 50.5-35.83 86.73-35.82 36.22-87.12 36.22H163.04ZM480-400.61 163.04-600.17v356.26h633.92v-356.26L480-400.61Zm0-112.61 322.13-202.87H157.87L480-513.22Zm-322.13-86.95v-115.92 472.18h5.17-5.17v-356.26Z"/></svg>&nbsp;&nbsp;CORREO INSTITUCIONAL</a>
            </div> --}}
            <nav class="nav flex-column flex-sm-row">
                <a class="flex-sm-fill text-sm-center nav-link custom-nav custom-h red" href="http://digital.regionhuanuco.gob.pe/login">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M43.83-612.22v-151.34q0-51.3 35.82-87.13 35.83-35.83 87.13-35.83h626.44q51.3 0 87.13 35.83 35.82 35.83 35.82 87.13v151.34H793.22v-151.34H166.78v151.34H43.83ZM166.78-209q-51.3 0-87.13-35.09-35.82-35.08-35.82-86.43v-184.74h122.95v183.3h626.44v-183.3h122.95v184.74q0 51.35-35.82 86.43Q844.52-209 793.22-209H166.78ZM4.09-63.56V-169h951.82v105.44H4.09ZM480-548.04ZM43.83-515.26v-96.96H320q13.34 0 25.48 6.66 12.13 6.65 18.56 19.52l38.53 79.48 113.39-198.92q5.87-12.3 18.02-18.74 12.15-6.43 25.96-6.43t25.93 6.15q12.11 6.15 18.17 18.46l46.13 93.82h266v96.96H627.48q-17.3 0-32.26-9.2-14.96-9.19-22.65-24.89l-15-29.56-113.53 196.34q-6.43 13.16-18.53 20.23-12.09 7.08-25.28 7.08-13.66 0-25.75-6.94-12.09-6.93-18.52-19.8l-66.13-133.26h-246Z"/></svg>&nbsp;&nbsp;
                    SGD DRE
                </a>
                <a class="flex-sm-fill text-sm-center nav-link custom-nav custom-h blue" href="http://digital.regionhuanuco.gob.pe/registro/mesa-partes-virtual/57">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M310.09-227.96h340.26v-101.69H310.09v101.69Zm0-166.61h339.82V-495.7H310.09v101.13ZM243.91-40.09q-50.5 0-86.73-35.83-36.22-35.82-36.22-87.12v-633.92q0-51.3 36.22-87.12 36.23-35.83 86.73-35.83h315.96L839.04-642.3v479.26q0 51.3-36.22 87.12-36.23 35.83-86.73 35.83H243.91ZM497.7-579.13v-217.83H243.91v633.92h472.18v-416.09H497.7ZM243.91-796.96v217.83-217.83 633.92-633.92Z"/></svg>&nbsp;&nbsp;
                    MESA DE PARTES DRE
                </a>
                <a class="flex-sm-fill text-sm-center nav-link custom-nav custom-h red" href="{{route('menus.showpaginaweb', 39)}}">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M310.09-227.96h340.26v-101.69H310.09v101.69Zm0-166.61h339.82V-495.7H310.09v101.13ZM243.91-40.09q-50.5 0-86.73-35.83-36.22-35.82-36.22-87.12v-633.92q0-51.3 36.22-87.12 36.23-35.83 86.73-35.83h315.96L839.04-642.3v479.26q0 51.3-36.22 87.12-36.23 35.83-86.73 35.83H243.91ZM497.7-579.13v-217.83H243.91v633.92h472.18v-416.09H497.7ZM243.91-796.96v217.83-217.83 633.92-633.92Z"/></svg>&nbsp;&nbsp;
                    MESA DE PARTES UGELES
                </a>
                <a class="flex-sm-fill text-sm-center nav-link custom-nav custom-h blue" href="https://webmail.drehuanuco.gob.pe/">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#FFFFFF"><path d="M163.04-120.96q-51.3 0-87.12-36.22-35.83-36.23-35.83-86.73v-472.18q0-50.5 35.83-86.73 35.82-36.22 87.12-36.22h633.92q51.3 0 87.12 36.22 35.83 36.23 35.83 86.73v472.18q0 50.5-35.83 86.73-35.82 36.22-87.12 36.22H163.04ZM480-400.61 163.04-600.17v356.26h633.92v-356.26L480-400.61Zm0-112.61 322.13-202.87H157.87L480-513.22Zm-322.13-86.95v-115.92 472.18h5.17-5.17v-356.26Z"/></svg>&nbsp;&nbsp;
                    CORREO INSTITUCIONAl
                </a>
            </nav>
        </div>
    <div class="col-md-1"></div>
</div>

  <!--Antiguo código
  <div style="background-color:#013072" class="">
    <div class="container">
        <div class="micontenido m-auto">
                <a href="http://digital.regionhuanuco.gob.pe/login" target="_blank" style="border:none;"  class="box btn btn-danger mx-0 p-2"><i class="fa fa-laptop"></i>&nbsp; <span style=" font-family:'oswald'">SGD DRE </span></a>
                <a href="http://digital.regionhuanuco.gob.pe/registro/mesa-partes-virtual/57" target="_blank" style="border:none;"  class="box btn btn-primary mx-0 p-2"><i class="fa fa-laptop"></i>&nbsp;<span style="font-family:'oswald'">Mesa de partes virtual DRE</span></a>
                <a href="https://drehuanuco.gob.pe/paginas/39" target="_blank" style="border:none;"  class="box btn btn-danger mx-0 p-2"><i class="fa fa-file"></i>&nbsp;<span style="font-family:'oswald'">Mesa de partes virtual de UGELES</span></a>
                <a href="https://accounts.google.com/" target="_blank" style="border:none;"  class="box btn btn-primary mx-0 p-2"><i class="fa fa-envelope"></i>&nbsp;<span style="font-family:'oswald'">Correo Institucional</span></a>
            {{-- <a href="http://digital.regionhuanuco.gob.pe/login" target="_blank" class="box m-auto btn btn-danger rounded-0" style="border:none;" tabindex="-1" role="button" aria-disabled="false"> <span style=" font-family:'oswald'">SGD DRE</span></a>
            <a href="http://digital.regionhuanuco.gob.pe/registro/mesa-partes-virtual/57" target="_blank" class="box m-auto btn btn-primary rounded-0" style="border:none;" tabindex="-1" role="button" aria-disabled="false"> <span style=" font-family:'oswald'">Mesa de partes virtual DRE</span></a>
            <a href="https://drehuanuco.gob.pe/paginas/39" target="_blank" class="box m-auto btn btn-danger rounded-0" style="border:none;" tabindex="-1" role="button" aria-disabled="false"> <span style=" font-family:'oswald'">Mesa de partes virtual de UGELES</span></a>
            <a href="https://accounts.google.com/" target="_blank" class="box m-auto btn btn-primary rounded-0" style="border:none;" tabindex="-1" role="button" aria-disabled="false"> <span style=" font-family:'oswald'">Correo Institucional</span></a> --}}
        </div>
    </div>
</div>-->

</header>

<!-- END HEADER -->

