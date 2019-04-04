@extends ('Frontend.layouts.layout')

@section('contenido')

<div class="clearfix"></div>
<section id="secondary-banner" class="dynamic-image-1" style="background-image: url(&quot;{{asset('images/slider_a7.jpg')}}&quot;);" >
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12">
                <h2>Subastas</h2>
                <h4>Unlimited Listings, Any Vehicle Type</h4>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                <ul class="breadcrumb">
                    <li><a href="{{route('/')}}">Inicio</a></li>
                    <li>Registro</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--secondary-banner ends-->
<div class="message-shadow"></div>
<div class="container margen">
    <div class="class=search-form margin-top-20 padding-vertical-20" >
        <form class="form-signin inventory-heading efficiency-rating text-center padding-vertical-15 margin-bottom-40">
            <h3  style="text-align: center;" class="form-signin-heading"><b>Regístrate</b></h3>
            <br>
            <input type="text" class="form-control" style="width: 50%;" placeholder="Nombre" required="" autofocus="">
            <input type="text" class="form-control" style="width: 50%;" placeholder="Apellido" required="">
            <input type="text" class="form-control" style="width: 100%;" placeholder="Correo Electrónico" required="" autofocus="">
            <input type="password" class="form-control " placeholder="Contraseña" required="">
            <button class="lg-button btn-block" type="submit">Registrar</button>
            
        </form>
        
    </div>
</div>

@endsection
@push('scripts')
<script>
    var route='{{asset('images/find.jpg') }}';
    $('.evento').parallax({imageSrc: route});
</script>

@endpush
