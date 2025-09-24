<!DOCTYPE html>

<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta content="Cristian Figueroa Ferrer" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="{{$mititulo ?? 'DIRECCION REGIONAL DE EDUCACION HUANUCO'}}">
<meta name="keywords" content="todo respecto a DRE Huanuco">
<meta http-equiv="Permissions-Policy" content="autoplay=(self), clipboard-write=(self), encrypted-media=(self), picture-in-picture=(self)">

<!-- SITE TITLE -->
<title>DIRECCION REGIONAL DE EDUCACION - HUANUCO</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/ico.png') }}">
<!-- Animation CSS -->
<link rel="stylesheet" href="{{ asset('plantillas/eduglobal/assets/css/animate.css') }}">
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="{{ asset('plantillas/eduglobal/assets/bootstrap/css/bootstrap.min.css') }}">
<!-- Google Font -->
  <!-- Fuente Winky Rough -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Winky+Rough:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  <!-- Fin Winky Rough -->
<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- Fin Google Font -->
<!--Icon SDG /Google Icons-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=browse_activity" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=browse_activity" />
<!-- Icon Font CSS -->
<link rel="stylesheet" href="{{ asset('plantillas/eduglobal/assets/css/ionicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('plantillas/eduglobal/assets/css/themify-icons.css') }}">
<!-- FontAwesome CSS -->
<link rel="stylesheet" href="{{ asset('plantillas/eduglobal/assets/css/all.min.css') }}">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="{{ asset('plantillas/eduglobal/assets/owlcarousel/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('plantillas/eduglobal/assets/owlcarousel/css/owl.theme.css') }}">
<link rel="stylesheet" href="{{ asset('plantillas/eduglobal/assets/owlcarousel/css/owl.theme.default.min.css') }}">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="{{ asset('plantillas/eduglobal/assets/css/magnific-popup.css') }}">
<!-- Style CSS -->
<link rel="stylesheet" href="{{ asset('plantillas/eduglobal/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('plantillas/eduglobal/assets/css/responsive.css') }}">

<link rel="stylesheet" id="layoutstyle" href="{{ asset('plantillas/eduglobal/assets/color/theme.css') }}">
<link rel="stylesheet" href="{{ asset('slider_magazine/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/miestilo.css') }}">

<!--FACEBOOK CONEXION -->
<Style>
    .social {
    position: fixed; /* Hacemos que la posición en pantalla sea fija para que siempre se muestre en pantalla*/
    left: 0; /* Establecemos la barra en la izquierda */
    top: 250px; /* Bajamos la barra 200px de arriba a abajo */
    z-index: 2000; /* Utilizamos la propiedad z-index para que no se superponga algún otro elemento como sliders, galerías, etc */
}

.social ul {
    list-style: none;
}

.social ul li a {
    display: inline-block;
    color: #fff;
    background: #000;
    padding: 10px 15px;
    width: 45px;
    text-decoration: none;
    -webkit-transition: all 500ms ease;
    -o-transition: all 500ms ease;
    transition: all 500ms ease; /* Establecemos una transición a todas las propiedades */
}

.social ul li .ic-facebook {
    background: #3b5998;
} /* Establecemos los colores de cada red social, aprovechando su class */
.social ul li .ic-twitter {
    background: #00abf0;
}
.social ul li .ic-googleplus {
    background: #d95232;
}
.social ul li .ic-mail {
    background: #666666;
}

.social ul li a:hover {
    background: #000; /* Cambiamos el fondo cuando el usuario pase el mouse */
    padding: 10px 30px; /* Hacemos mas grande el espacio cuando el usuario pase el mouse */
}

</Style>
</head>

<body>

<div class="social">
	<ul>
		<li><a href="https://www.facebook.com/direccionregionaldeeducacion/?locale=es_LA" target="_blank" class="ic-facebook fa fa-facebook"></a></li>
		<li><a href="http://www.twitter.com" target="_blank" class="ic-twitter fa fa-twitter"></a></li>
		<li><a href="https://www.tiktok.com/@drehuanuco?referer_url=drehuanuco.gob.pe%2F&refer=creator_embed&embed_source=121374463%2C121468991%2C121439635%2C121749182%2C121433650%2C121404359%2C121497414%2C121477481%2C121351166%2C121487028%2C121679410%2C73347566%2C121331973%2C120811592%2C120810756%2C121503376%3Bnull%3Bembed_creator_card" target="_blank" class="ic-googleplus fa fa-music"></a></li>
		<li><a href="mailto:rcoronel@drehuanuco.gob.pe" class="ic-mail fa fa-envelope-o"></a></li>
	</ul>
</div>

@include('principal.header')

@yield('content')

@include('principal.footer')




<!-- Latest jQuery -->
<script src="{{ asset('plantillas/eduglobal/assets/js/jquery-1.12.4.min.js') }}"></script>
<!-- jquery-ui -->
<script src="{{ asset('plantillas/eduglobal/assets/js/jquery-ui.js') }}"></script>
<!-- popper min js -->
<script src="{{ asset('plantillas/eduglobal/assets/js/popper.min.js') }}"></script>
<!-- Latest compiled and minified Bootstrap -->
<script src="{{ asset('plantillas/eduglobal/assets/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- owl-carousel min js  -->
<script src="{{ asset('plantillas/eduglobal/assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
<!-- magnific-popup min js  -->
<script src="{{ asset('plantillas/eduglobal/assets/js/magnific-popup.min.js') }}"></script>
<!-- waypoints min js  -->
<script src="{{ asset('plantillas/eduglobal/assets/js/waypoints.min.js') }}"></script>
<!-- parallax js  -->
<script src="{{ asset('plantillas/eduglobal/assets/js/parallax.js') }}"></script>
<!-- countdown js  -->
<script src="{{ asset('plantillas/eduglobal/assets/js/jquery.countdown.min.js') }}"></script>
<!-- jquery.counterup.min js -->
<script src="{{ asset('plantillas/eduglobal/assets/js/jquery.counterup.min.js') }}"></script>
<!-- imagesloaded js -->
<script src="{{ asset('plantillas/eduglobal/assets/js/imagesloaded.pkgd.min.js') }}"></script>
<!-- isotope min js -->
<script src="{{ asset('plantillas/eduglobal/assets/js/isotope.min.js') }}"></script>
<!-- jquery.parallax-scroll js -->
<script src="{{ asset('plantillas/eduglobal/assets/js/jquery.parallax-scroll.js') }}"></script>
<!-- scripts js -->
<script src="{{ asset('plantillas/eduglobal/assets/js/scripts.js') }}"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


<script>
    $(document).ready(function(){
      $('#modalpopup').modal('show');
    })


    $('#carouselExampleControls2').carousel({
  interval: 3000
});
</script>

<script type='text/javascript' id='cream-magazine-bundle-js-extra'>
    /* <![CDATA[ */
    var cream_magazine_script_obj = {"show_search_icon":"","show_news_ticker":"1","show_banner_slider":"1","show_to_top_btn":"1","enable_image_lazy_load":"","enable_sticky_sidebar":"1","enable_sticky_menu_section":""};
    /* ]]> */
    </script>
    {{-- <script type='text/javascript' src='https://diarioelsiglo.pe/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script> --}}
    <script type='text/javascript' src='{{ asset('slider_magazine/bundle.min.js') }}' id='cream-magazine-bundle-js'>
</script>

</body>
</html>



