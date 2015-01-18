<!DOCTYPE html>
<html lang="auto">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title')
			Museo
			@show
		</title>
		@section('meta_keywords')
		<meta name="keywords" content="your, awesome, keywords, here" />
		@show
		@section('meta_author')
		<meta name="author" content="Jon Doe" />
		@show
		@section('meta_description')
		<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />
                @show
		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- CSS
		================================================== -->
       <!-- favicon -->
        <link rel="icon" type="image/png" href="{{{ asset('template/images/temp/favicon.ico') }}}">

        <!-- Bootstrap CSS -->
        <link href="{{{ asset('bootstrap/css/bootstrap.min.css') }}}" rel="stylesheet">

        <!-- Plugins CSS -->
        <link href="{{{ asset('template/plugins/font-awesome/css/font-awesome.min.css') }}}" rel="stylesheet">
        <link href="{{{ asset('template/plugins/owl-carousel/owl.carousel.css') }}}" rel="stylesheet">
        <link href="{{{ asset('template/plugins/owl-carousel/owl.transitions.css') }}}" rel="stylesheet">
        <link href="{{{ asset('template/plugins/owl-carousel/owl.theme.css') }}}" rel="stylesheet">
        <link href="{{{ asset('template/plugins/lightbox/css/lightbox.css') }}}" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="{{{ asset('template/css/style-theme.css') }}}" rel="stylesheet">
        <!-- <link href="css/style-theme.min.css" rel="stylesheet"> -->
        <link href="{{{ asset('template/css/style-colours.css') }}}" rel="stylesheet">
        <!-- <link href="css/style-colours.min.css" rel="stylesheet"> -->
        <link href="{{{ asset('template/css/style-mixedcolours.css') }}}" rel="stylesheet">
        <!-- <link href="css/style-mixedcolours.min.css" rel="stylesheet"> -->

        <!-- loader -->
        <link href="{{{ asset('template/css/loader.css') }}}" rel="stylesheet">
        <script src="{{{ asset('template/plugins/pace/pace.min.js') }}}"></script>

        <!-- Custom Theme CSS -->
        <link href="{{{ asset('template/css/styles.css') }}}" rel="stylesheet">

		<style>
       
		@section('styles')
		@show
		</style>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Favicons
		================================================== 
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}}">
		<link rel="apple-touch-icon-precomposed" href="{{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}}">
		<link rel="shortcut icon" href="{{{ asset('assets/ico/favicon.png') }}}">-->
	</head>

	<body class="background-light twlsky-red isolated-sections loader-bar">
	 <!-- Page Outer Container -->
        <div class="outer-container clearfix">
	<header class="clearfix">

                <div class="logo">
                    <a href="index.html"><img src="{{ asset('template/images/design/header.png')}}" alt="Hermandad Del Museo" id="logo_dark"></a>
                </div><!-- .logo -->

                <div id="main-menu-container" class="clearfix">

                    <div id="mobile-menu-icon" class="btn btn-outline-inverse visible-xs"><span class="glyphicon glyphicon-th"></span></div>

                    <!--<div id="search-container">
                        <div id="search-icon"><i class="fa fa-search"></i></div>
                        <div id="search-input">
                            <form class="clearfix">
                                <input type="text" class="form-control" id="website-search" name="search" placeholder="Search">
                                <div id="search-close"><i class="fa fa-times"></i></div>
                            </form>
                        </div>
                    </div>--><!-- #search-container -->

                    <ul id="main-menu">
                        <li class="menu-item current-menu-ancestor"><a href="inicio">Inico</a>
                            <!--<ul class="sub-menu">
                                <li class="menu-item current-menu-item"><a href="index.html">Layout 1</a></li>
                                <li class="menu-item"><a href="index-2.html">Layout 2</a></li>
                            </ul>-->
                        </li>
                        <li class="menu-item"><a href="about.html">Hermandad</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="sagrados-titulares">Sagrados Titulares</a></li>
                                <li class="menu-item"><a href="junta-de-gobierno">Junta de Gobierno</a></li>
                                <li class="menu-item"><a href="reglas-y-ordenanzas">Reglas y Ordenanzas</a></li>
                                <li class="menu-item"><a href="historia">Historia</a></li>
                                <li class="menu-item"><a href="servicios">Servicios</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="noticias">Noticias</a>
                            <!--<ul class="sub-menu">
                                <li class="menu-item"><a href="news.html">With Images</a></li>
                                <li class="menu-item"><a href="news-date.html">With Date</a></li>
                            </ul>-->
                        </li>
                        <li class="menu-item"><a href="actividades">Actividades</a>
                            <!--<ul class="sub-menu">
                                <li class="menu-item"><a href="activities.html">Inline Text</a></li>
                                <li class="menu-item"><a href="activities-textmask.html">Text Mask</a></li>
                            </ul>-->
                        </li>
                        <li class="menu-item"><a href="juventud">Juventud</a>
                            <!--<ul class="sub-menu">
                                <li class="menu-item"><a href="services.html">List</a></li>
                                <li class="menu-item"><a href="services-grid.html">Icons Grid</a></li>
                            </ul>-->
                        </li>
                        <li class="menu-item"><a href="#">Multimedia</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="el-museo-en-imagenes">El Museo en im&aacute;genes</a></li>
                                <li class="menu-item"><a href="el-museo-en-videos">El Museo en v&iacute;deos</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="#">Estaci&oacute;n de Penitencia</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="introduccion">Introducci&oacute;n</a></li>
                                <li class="menu-item"><a href="el-cortejo">El Cortejo</a></li>
                                <li class="menu-item"><a href="los-pasos">Los Pasos</a></li>
                                <li class="menu-item"><a href="las-tunicas">Las T&uacute;nicas</a></li>
                                <li class="menu-item"><a href="horarios-e-itinerarios">Horarios e itinerarios</a></li>
                                <li class="menu-item"><a href="reserva-de-insignias">Reserva de Insignias</a></li>
                            </ul>
                        </li>
                        <li class="menu-item"><a href="{{{ URL::to('contacto') }}}">Contacto</a>
                            <ul class="sub-menu">
                                <li class="menu-item"><a href="libro-de-celebraciones">Libro de Celebraciones</a></li>                                
                            </ul>
                        </li>
                    </ul><!-- #main-menu -->

                </div><!-- #menu-container -->

            </header>
            <!-- End: Header -->
		<!-- To make sticky footer need to wrap in a div -->
<!-- 		<div id="wrap"> -->
		<!-- Navbar -->
<!-- 		<div class="navbar navbar-default navbar-inverse navbar-fixed-top"> -->
<!-- 			 <div class="container"> -->
<!--                 <div class="navbar-header"> -->
<!--                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> -->
<!--                         <span class="sr-only">Toggle navigation</span> -->
<!--                         <span class="icon-bar"></span> -->
<!--                         <span class="icon-bar"></span> -->
<!--                         <span class="icon-bar"></span> -->
<!--                     </button> -->
<!--                 </div> -->
<!--                 <div class="collapse navbar-collapse navbar-ex1-collapse"> -->
<!--                     <ul class="nav navbar-nav"> -->
<!-- 						<li {{ (Request::is('/') ? ' class="active"' : '') }}><a href="{{{ URL::to('') }}}">Home</a></li> -->
<!-- 					</ul> -->

<!--                     <ul class="nav navbar-nav pull-right"> -->
<!--                         @if (Auth::check()) -->
<!--                         @if (Auth::user()->hasRole('admin')) -->
<!--                         <li><a href="{{{ URL::to('admin') }}}">Admin Panel</a></li> -->
<!--                         @endif -->
<!--                         <li><a href="{{{ URL::to('user') }}}">Logged in as {{{ Auth::user()->username }}}</a></li> -->
<!--                         <li><a href="{{{ URL::to('user/logout') }}}">Logout</a></li> -->
<!--                         @else -->
<!--                         <li {{ (Request::is('user/login') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/login') }}}">Login</a></li> -->
<!--                         <li {{ (Request::is('user/create') ? ' class="active"' : '') }}><a href="{{{ URL::to('user/create') }}}">{{{ Lang::get('site.sign_up') }}}</a></li> -->
<!--                         @endif -->
<!--                     </ul> -->
					<!-- ./ nav-collapse -->
<!-- 				</div> -->
<!-- 			</div> -->
<!-- 		</div> -->
		<!-- ./ navbar -->

		<!-- Container -->
		
        <!-- =========== Page Body Inside Content =========== -->
        <div class="inside-body-content-container clearfix">

		
			<!-- Content -->
			@yield('content')
			<!-- ./ content -->
		</div>
		<!-- ./ container -->

		   <!-- =========== Footer =========== -->
                <footer class="container-fluid horizontal-section-container clearfix">
                    <div class="row">

                        <!-- footer hor divider -->
                        <div class="col-xs-12"><hr class="hor-divider" /></div>

                        <div class="col-sm-6">
                            <!-- Affiliates Carousel -->
                            <div id="footer-affiliates" class="section-container clearfix">

                                <a href="#" class="section-header footer-header">
                                    <h5 class="text">Affiliates</h5>
                                </a><!-- .section-header -->

                                <div class="section-content clearfix">
                                    <!-- initialised in /js/initialise-functions.js -->
                                    <ul id="affiliates-slider-4cols" class="icons-grid-list-4cols owl-carousel owl-theme">
                                        
                                        <!-- icon -->
                                        <li class="icon clearfix">
                                            <a href="#"><img src="{{asset('template/images/temp/icon-company1.png')}}" alt="Company Logo"></a>
                                        </li>

                                        <!-- icon -->
                                        <li class="icon clearfix">
                                            <a href="#"><img src="{{asset('template/images/temp/icon-company2.png')}}" alt="Company Logo"></a>
                                        </li>

                                        <!-- icon -->
                                        <li class="icon clearfix">
                                            <a href="#"><img src="{{asset('template/images/temp/icon-company3.png')}}" alt="Company Logo"></a>
                                        </li>

                                        <!-- icon -->
                                        <li class="icon clearfix">
                                            <a href="#"><img src="{{asset('template/images/temp/icon-company4.png')}}" alt="Company Logo"></a>
                                        </li>

                                        <!-- icon -->
                                        <li class="icon clearfix">
                                            <a href="#"><img src="{{asset('template/images/temp/icon-company5.png')}}" alt="Company Logo"></a>
                                        </li>

                                        <!-- icon -->
                                        <li class="icon clearfix">
                                            <a href="#"><img src="{{asset('template/images/temp/icon-company1.png')}}" alt="Company Logo"></a>
                                        </li>

                                    </ul><!-- .icons-grid-list -->
                                </div><!-- .section-content -->

                            </div><!-- .section-container -->
                            <!-- End: Affiliates Carousel -->                            
                        </div><!-- .col-sm-6 -->

                        <div class="col-sm-6">
                            <!-- Contact Us -->
                            <div id="footer-contact-us" class="section-container clearfix">

                                <a href="contact-2.html" class="section-header footer-header">
                                    <h5 class="text">Contacto</h5>
                                </a><!-- .section-header -->

                                <div class="section-content clearfix">
                                    <div class="vertical-simple-list contact-list">
                                        
                                        <div class="col-xs-6">
                                            <!-- list item -->
                                            <div class="item clearfix"><div class="item-content">
                                                <div class="icon"><span class="glyphicon glyphicon-map-marker"></span></div>
                                                <h6 class="title">Hermandad del Museo, Calle Bail&eacute;n, 59 <br/>41001 Sevilla</h6>
                                            </div></div>
                                        </div><!-- .col-xs-6 -->

                                        <div class="col-xs-6">
                                            <!-- list item -->
                                            <div class="item clearfix"><div class="item-content">
                                                <div class="icon"><span class="glyphicon glyphicon-earphone"></span></div>
                                                <h6 class="title">954-226-710</h6>
                                            </div></div>

                                            <!-- list item -->
                                            <div class="item clearfix"><div class="item-content">
                                                <div class="icon"><span class="glyphicon glyphicon-envelope"></span></div>
                                                <h6 class="title">contacto@hermandaddelmuseo.org</h6>
                                            </div></div>
                                            
                                            <div class="item clearfix"><div class="item-content">
                                                <a href="aviso-legal"><h6 class="title">Aviso Legal</h6></a>
                                            </div></div>
                                        </div><!-- .col-xs-6 -->

                                    </div><!-- .vertical-simple-list -->
                                </div><!-- .section-content -->

                            </div><!-- .section-container -->
                            <!-- End: Contact Us -->                            
                        </div><!-- .col-sm-6 -->

                    </div><!-- .row -->
                </footer><!-- .container-fluid -->
                <!-- End: Footer -->             

            </div><!-- .inside-body-content-container -->
            <!-- End: Page Body Inside Content -->

        </div><!-- .outer-container -->
        <!-- End: Page Outer Container -->

        <!-- Beneath Footer -->
        <div id="beneath-footer" class="center-container clearfix">

            <!-- left -->
            <div class="col-sm-6 beneath-footer-left">
                <div class="text">
                    
                    <br/><a style="color: white;" href="mailto:10codesoft@gmail.com">&copy; {{{date('Y')}}} | Developed by 10Code</a>
                </div>
            </div>

            <!-- right -->
            <div class="col-sm-6 beneath-footer-right">
                <ul class="social-media-icons clearfix">
                    <li><a href="https://www.facebook.com/pages/Hermandad-del-Museo-Sevilla/424077367665366" target="_blank" title="Facebok"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="http://twitter.com/hdad_museo" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank" title="Google+"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" target="_blank" title="Google+"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>

        </div><!-- #beneath-footer -->

        <!-- go to top -->
        <div id="go-to-top" onclick="scroll_to_top(this.event);" title="Go to top"><span class="glyphicon glyphicon-chevron-up"></span></div>

		<!-- Javascripts
		================================================== -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>        
        <script>
		var ruta = "{{asset('template/js/jquery.min.js')}}";
        window.jQuery || document.write("<script src=ruta></script>")
        </script>
    

        <!-- Easing - for transitions and effects -->
        <script src="{{asset('template/js/jquery.easing.1.3.js')}}"></script>

        <!-- Plugins -->
        <script src="{{asset('template/js/detectmobilebrowser.js')}}"></script>
        <script src="{{asset('template/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('template/plugins/lightbox/js/lightbox.min.js')}}"></script>
        <script src="{{asset('template/plugins/masonry/masonry.pkgd.min.js')}}"></script>

        <!-- Custom functions for this theme -->
        <script src="{{asset('template/js/functions.js')}}"></script>
        <!-- <script src="js/functions-min.js"></script> -->
        <script src="{{asset('template/js/initialise-functions.js')}}"></script>
		
        @yield('scripts')
	</body>
</html>
