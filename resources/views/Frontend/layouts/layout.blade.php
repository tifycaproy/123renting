
<html lang="en" class="js no-touch">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('images/favicon_1.ico')}}">
    <title>@isset ($title) {{ $title }} @endisset</title>
    <meta name="description" content="@isset ($meta_description) {{ $meta_description }} @endisset">
    <meta name="image" content="{{asset('images/logo-frioyapty.png')}}">
    <meta itemprop="name" content="@isset ($meta_name) {{ $meta_name }} @endisset">
    <meta itemprop="description" content="@isset ($meta_description) {{ $meta_description }} @endisset">
    <meta itemprop="image" content="{{asset('images/logo.png')}}">
    <meta name="og:title" content="@isset ($meta_name) {{ $meta_name }} @endisset">
    <meta name="og:description" content="@isset ($meta_description) {{ $meta_description }} @endisset">
    <meta name="og:image" itemprop="image" content="{{asset('images/logo-frioyapty.png')}}">
    <meta name="og:url" content="@isset ($meta_url) {{ $meta_url }} @endisset">
    <meta name="og:site_name" content="@isset ($meta_name) {{ $meta_name }} @endisset ">
    <meta name="og:locale" content="en_ES">
    <meta name="fb:admins" content="@isset ($meta_description) {{ $meta_description }} @endisset">
    <meta name="og:type" content="website">

    <link href="{{asset('css/front/bootstrap.min.css')}}" rel="stylesheet">    
    <link href="{{ asset('css/front/flexslider.css') }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{asset('css/front/jquery.bxslider.css')}}" rel="stylesheet"  type="text/css" media="screen">
    <link href="{{asset('css/front/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{asset('css/front/jquery.selectbox.css')}}" rel="stylesheet">
    <link href="{{asset('css/front/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/front/mobile.css')}}" rel="stylesheet">
    <link href="{{asset('css/front/settings.css')}}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{asset('css/front/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/front/ts.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/front/signin.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('css/front/responsive.css')}}" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="{{asset('js/front/jquery.min.js')}}"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    

</head>

<body>

<header data-spy="affix" data-offset-top="1" class="clearfix affix-top">
    <section class="toolbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 left_bar">
                    {{-- <ul class="left-none">
                        <li><a href=""><i class="fas fa-user"></i> Login</a>
                        </li>
                        <li><a href=""><i class="fas fa-globe"></i> Languages</a>
                        </li>
                        <li><i class="fas fa-search"></i>
                            <input type="search" placeholder="Search" class="search_box">
                        </li>
                    </ul> --}}
                     @isset($instagram)  
                     <ul class="left-none">
                         <li><a href="https://www.instagram.com/{{$instagram}}"><i class="fab fa-instagram" style="padding-right: 1rem;"></i></a> </li>
                        @endisset
                        @isset($facebook) 
                        <li><a href="https://www.facebook.com/{{$facebook}}"><i class="fab fa-facebook" style="padding-right: 1rem;"></i></a></li>
                        @endisset
                        @isset($twitter) 
                        <li><a href="https://twitter.com/{{$twitter}}"><i class="fab fa-twitter" style="padding-right: 1rem;"></i></a></li>
                        @endisset 
                         </ul>
                </div>
                <div class="col-lg-6 ">
                    <ul class="right-none pull-right company_info">
                        <li><a href="tel:18005670123"><i class="fas fa-phone"></i>@isset($telefono)
                                 {{$telefono}}</li>
                               @endisset </a></li>
                        <li class="address"><a href="">
                            <i class="fas fa-map-marker-alt"></i>  @isset($direccion)  {{$direccion}}</li>
                               @endisset</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="toolbar_shadow"></div>
    </section>

    <div class="bottom-header">
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid"> 
                    
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a class="navbar-brand" href="{{route('/')}}">
                            <span class="logo">
                                <img src="{{asset('images/123_logo.png')}}" alt="">
                            </span>
                        </a>
                    </div>
                    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav pull-right">
                            <li class=" {{ Request::is('/') ? 'active' : '' }}"><a href="{{route('/')}}">Inicio</a></li>
                            <li class="{{ Request::is('coches*') ? 'active' : '' }}"><a href="{{route('coches')}}">Coches</a></li>
                                                   
                        </ul>
                    </div>
                    <!-- /.navbar-collapse --> 
                </div>
                <!-- /.container-fluid --> 
            </nav>
        </div>
        <div class="header_shadow"></div>
    </div>
</header>

    @yield('contenido')

<footer class="design_2">
        <div class="container">
            <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <h4>Menú</h4>
                            <div class="latest-tweet">
                                <div><i class="fas fa-home" style="padding-right: 1rem;"></i>
                                <a href="{{route('/')}}"><b>Inicio</b></a> 
                                </div>
    
                                <div><i class="fas fa-tags" style="padding-right: 1rem;"></i>
                                    <a href="{{route('coches')}}"><b>Coches</b></a> 
                                </div>
    
                                {{-- <div><i class="fas fa-user" style="padding-right: 1.5rem;"></i>
                                    <a href="{{route('login')}}"><b>Login</b></a> 
                                </div> --}}
                            </div>
                        </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 padding-right-none md-padding-right-none sm-padding-right-15 xs-padding-right-15">
                    <h4>Nuestras Redes</h4>
                    <div class="footer-contact">
                            
                        @isset($instagram)  
                        <div><i class="fab fa-instagram" style="padding-right: 1rem;"></i>
                                <a href="https://www.instagram.com/{{$instagram}}"><b>Instagram</b></a> 
                        </div>
                        @endisset
                        @isset($facebook) 
                        <div><i class="fab fa-facebook" style="padding-right: 1rem;"></i>
                            <a href="https://www.facebook.com/{{$facebook}}"><b>Facebook</b></a> 
                        </div>
                        @endisset
                        @isset($twitter) 
                         <div><i class="fab fa-twitter" style="padding-right: 1rem;"></i>
                            <a href="https://twitter.com/{{$twitter}}"><b>Twitter</b></a> 
                        </div>
                        @endisset                                    
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 padding-right-none md-padding-right-none sm-padding-right-15 xs-padding-right-15">
                        <h4>Contáctanos</h4>
                        <div class="footer-contact">
                            <ul>
                               @isset($direccion) 
                               <li><i class="fas fa-map-marker-alt"></i> <b>Address:</b> {{$direccion}}</li>
                               @endisset
                               @isset($telefono)
                               <li><i class="fas fa-phone"></i> <b>Phone:</b> {{$telefono}}</li>
                               @endisset
                               @isset($email)
                               <li><i class="fas fa-envelope"></i> <b>Email:</b> {{$email}}</li>
                               @endisset
                            </ul>
        
                            {{-- <i class="fas fa-location-arrow back_icon"></i> --}}
                        </div>
                    </div>

            </div>
        </div>
</footer>

<div class="back_to_top" style="display: none; padding-top: 15px;"> <img src="{{asset('images/arrow-up.png')}}" alt=""> </div>


{{-- <script type="text/javascript" charset="UTF-8" src="{{asset('js/onion.js')}}"></script> --}}
{{-- <script type="text/javascript" charset="UTF-8" src="{{asset('js/stats.js')}}"></script> --}}
{{-- <script type="text/javascript" charset="UTF-8" src="{{asset('js/controls.js')}}"></script> --}}
<script type="text/javascript" src="{{asset('js/front/wow.min.js')}}"></script>
{{-- <script type="text/javascript" charset="UTF-8" src="{{asset('js/front/common.js')}}"></script> --}}
{{-- <script type="text/javascript" charset="UTF-8" src="{{asset('js/front/util.js')}}"></script> --}}
{{-- <script type="text/javascript" charset="UTF-8" src="{{asset('js/front/map.js')}}"></script> --}}
{{-- <script type="text/javascript" charset="UTF-8" src="{{asset('js/front/marker.js')}}"></script> --}}
{{-- <script type="text/javascript" src="{{asset('js/front/jquery.themepunch.tools.min.js')}}"></script> --}}
{{-- <script type="text/javascript" src="{{asset('js/front/jquery.themepunch.revolution.min.js')}}"></script> --}}
{{-- <script type="text/javascript" src="{{asset('js/front/revolution.extension.actions.min.js')}}"></script> --}}
{{-- <script type="text/javascript" src="{{asset('js/front/revolution.extension.carousel.min.js')}}"></script> --}}
{{-- <script type="text/javascript" src="{{asset('js/front/revolution.extension.kenburn.min.js')}}"></script> --}}
{{-- <script type="text/javascript" src="{{asset('js/front/revolution.extension.layeranimation.min.js')}}"></script> --}}
{{-- <script type="text/javascript" src="{{asset('js/front/revolution.extension.migration.min.js')}}"></script> --}}
{{-- <script type="text/javascript" src="{{asset('js/front/revolution.extension.navigation.min.js')}}"></script> --}}
{{-- <script type="text/javascript" src="{{asset('js/front/revolution.extension.parallax.min.js')}}"></script> --}}
{{-- <script type="text/javascript" src="{{asset('js/front/revolution.extension.slideanims.min.js')}}"></script> --}}
{{-- <script type="text/javascript" src="{{asset('js/front/revolution.extension.video.min.js')}}"></script> --}}
<script src="{{asset('js/front/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/front/jquery.min.js')}}"></script>
{{-- <script src="{{asset('js/front/retina.js')}}"></script>  --}}
<script type="text/javascript" src="{{asset('js/front/jquery.parallax.js')}}"></script> 
{{-- <script type="text/javascript" src="{{asset('js/front/jquery.inview.min.js')}}"></script>  --}}
<script src="{{asset('js/front/main.js')}}"></script> 
{{-- <script type="text/javascript" src="{{asset('js/front/jquery.fancybox.js')}}"></script>  --}}
<script src="{{asset('js/front/modernizr.custom.js')}}"></script> 
<script defer="" src="{{asset('js/front/jquery.flexslider.js')}}"></script> 
{{-- <script src="{{asset('js/front/jquery.bxslider.js')}}" type="text/javascript"></script>  --}}
<script src="{{asset('js/front/jquery.selectbox-0.2.js')}}" type="text/javascript"></script> 
<script type="text/javascript" src="{{asset('js/front/jquery.mousewheel.js')}}"></script> 
<script type="text/javascript" src="{{asset('js/front/jquery.easing.js')}}"></script>

@stack('scripts')
</body>
</html>
