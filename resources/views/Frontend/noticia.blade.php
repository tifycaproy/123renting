@extends ('Frontend.layouts.layout')

@section('contenido')
    
    
<div class="clearfix"></div>
<section id="secondary-banner" class="dynamic-image-9" style="background-image: url(&quot;{{asset('images/1920x1080_InlineMediaGalerie_Modul3_AA7_171014.jpg')}}&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <h2>Sección de Noticia</h2>
                <h4></h4>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 ">
                <ul class="breadcrumb">
                <li><a href="{{route('/')}}">Inicio</a></li>
                    <li>Noticia</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--secondary-banner ends-->
<div class="message-shadow"></div>
<div class="clearfix"></div>
<section class="content">
    <div class="container">
        <div class="inner-page full-width row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-left-none padding-right-none">
                <div class="blog-content">
                    <div class="post-entry clearfix"> <img width="1170" height="501" src="{{ url('/images/noticias/'.$noticias->url_imagen) }}" alt="" />
                        <div class="blog-title">
                            <h2 class="margin-top-40">{{$noticias->fuente}}</h2>
                            <strong class="margin-top-5 margin-bottom-25">{{$noticias->titulo}}</strong> </div>
                            {!!$noticias->descripcion!!}
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--container ends--> 
</section>
<!--content ends-->
<div class="clearfix"></div>



@endsection
@push('scripts')
<script>
    var route='{{asset('images/find.jpg') }}';
    $('.evento').parallax({imageSrc: route});
</script>

@endpush