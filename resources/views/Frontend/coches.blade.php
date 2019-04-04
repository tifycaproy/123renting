@php
use Carbon\Carbon; 
@endphp
@extends ('Frontend.layouts.layout')

@section('contenido')

<div class="clearfix"></div>
<section id="secondary-banner" class="dynamic-image-1" style="background-image: url(&quot;{{asset('images/slider_a7.jpg')}}&quot;);" >
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12">
                <h2>Coches</h2>
                <h4>Unlimited Listings, Any Vehicle Type</h4>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12">
                <ul class="breadcrumb">
                    <li><a href="{{route('/')}}">Inicio</a></li>
                    <li>Coches</li>
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
        <div class="inner-page row">
            
            <div class="row">
                <div class="inventory-wide-sidebar-left">
                    <div class=" col-md-9  col-lg-push-3 col-md-push-3">
                        <div class="car_listings sidebar  clearfix ">
                        @forelse($vehiculos as $vehiculo)
                            <div class="row" style="height: 200px; margin-top: 30px; border: 1px solid #D3D3D3">
                                <div class="col-xs-12 col-lg-4" style="background-image: url('{{ url('http://localhost/123subasta/public/images/galeria/'.$vehiculo->img) }}'); background-position: center center; background-repeat: no-repeat; background-size: cover; height: 100%">
                                </div>
                                <div class="col-xs-12 col-lg-5 " style="height: 100%">
                                    <?php  $anio=Carbon::parse($vehiculo->fecha_matriculacion); ?>
                                    <h3 class="title" style="margin-top: 0px">{{$anio->year}} {{$vehiculo->marca}} {{$vehiculo->modelo}}</h3>
                                    <table class="options-primary">
                                        <tbody>
                                            <tr>
                                                <td class="option primary">Kilometrage:</td>
                                                <td class="spec"> {{ $vehiculo->kilometraje }} Km</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Combustible:</td>
                                                <td class="spec"> {{ $vehiculo->combustible }}</td>
                                            </tr>
                                            <tr>
                                                <td class="option primary">Transmisión:</td>
                                                <td class="spec"> {{ $vehiculo->transmision }}</td>
                                            </tr>
                                       
                                            </tbody>
                                        </table>
                                    <table class="options-secondary">
                                        <tbody>
                                            <tr>
                                                <td class="option secondary">Potencia:</td>
                                                <td class="spec"> {{ $vehiculo->potencia }}</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">Cilindrada:</td>
                                                <td class="spec"> {{ $vehiculo->cilindrada }}</td>
                                            </tr>
                                            <tr>
                                                <td class="option secondary">Emisiones CO2:</td>
                                                <td class="spec"> {{ $vehiculo->normativa_emisiones_co2 }}</td>
                                            </tr>
                                        
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-xs-12 col-lg-3"  style="height: 100%; background-color: #F4F5F6; padding: 10px">
                                    
                                    <h3 style="color:#EC4B25; margin-top: 0px"><b>$299.00</b></h3>
                                    <b style="color:black">Iva no inc / mes *</b>
                                    <b style="color:black">48 Meses | 60000 Km </b><br>

                                    <a href="{{url('categorias/listado/detalle', $vehiculo->id)}}" class="mas-detalle" style=""><b style="">Más Detalle</b> <i class="fas fa-arrow-right" style="margin-left: 10px"></i></a>
                                </div>
                            </div>
                            
                           @empty
                          <td class="text-center" colspan="5">
                            <h4>No hay Vehiculos Registrados</h4>
                          </td>
                        @endforelse
                            <div class="clearfix"></div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pagination_container">
                                   <ul class="pagination margin-bottom-none margin-top-25 bottom_pagination md-margin-bottom-none xs-margin-bottom-60 sm-margin-bottom-60">
                                    <li>{{ $vehiculos->links() }}</li>
                                </ul>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <div class=" col-md-3 col-lg-pull-9 col-md-pull-9 left-sidebar">
                    <div class="left_inventory">
                        <h3 class="margin-bottom-25">FILTRO DE BUSQUEDA</h3>
                         <form class="clearfix select-form padding-bottom-50" action="{{route('coches')}}" method="GET">
                           
                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                <select name="marca" id="marca" class="css-dropdowns" tabindex="1" sb="55679103" style="display: none;">
                                    <option value="">Marcas</option>
                                    @foreach($marcas as $marca)
                                    <option value="{{$marca->id}}">{{$marca->descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                <select name="modelo" id="modelo" class="css-dropdowns" tabindex="1" sb="55679102" style="display: none;">
                                    <option value="">Modelo</option>
                                    @foreach($modelos as $modelo)
                                    <option value="{{$modelo->id}}">{{$modelo->descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                <select name="combustible" id="combustible" class="css-dropdowns" tabindex="1" sb="67146398" style="display: none;">
                                    <option value="">Tipo de Combustible</option>
                                    @foreach($combustibles as $combustible)
                                    <option value="{{$combustible->id}}">{{$combustible->descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                <select name="kilometraje" id="kilometraje" class="css-dropdowns" tabindex="1" sb="18425414" style="display: none;">
                                    <option value="">Kilometraje</option>
                                    <option value="20000">0 km - 20.000 km</option>
                                    <option value="80000">20.000 km - 80.000 km</option>
                                    <option value="140000">80.000 km - 140.000 km</option>
                                    <option value="200000">140.000 km - 200.000 km</option>
                                    <option value="200001">&gt; 200.000 km</option>
                                </select>
                            </div>
                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                <select name="transmision" id="transmision" class="css-dropdowns" tabindex="1" sb="10441537" style="display: none;">
                                    <option value="">Transmisión</option>
                                    @foreach($transmisions as $transmision)
                                    <option value="{{$transmision->id}}">{{$transmision->descripcion}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="my-dropdown min-years-dropdown max-dropdown">
                                <select name="procedencia" id="procedencia" class="css-dropdowns" tabindex="1" sb="83574175" style="display: none;">
                                    <option value="">Procedencia</option>
                                    @foreach($paises as $pais)
                                    <option value="{{$pais->id}}">{{$pais->desc}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="reset" value="Reiniciar Filtros" class="pull-left btn-inventory margin-bottom-none md-button">
                            <input type="submit" value="Buscar" class="pull-left btn-inventory margin-bottom-none md-button">
                        </form>
                        <div class="side-content row">
                            <div class="list col-md-12 col-sm-3 padding-bottom-50">
                                <h3 class="margin-bottom-25">AÑO</h3>
                                <ul>
                                    @foreach($anios as $anio)
                                    <li><a href="{{route('coches',['anio'=> $anio->anio])}}"><span>{{$anio->anio}} <strong>({{$anio->cant}})</strong></span></a></li>
                                    @endforeach                                    
                                </ul>
                            </div>
                            <div class="list col-md-12 col-sm-3 padding-bottom-50">
                                <h3 class="margin-bottom-25">MARCA</h3>
                                 <ul>
                                    @foreach($marcascant as $marca)
                                    <li><a href="{{route('coches',['marca'=> $marca->id])}}"><span>{{$marca->descripcion}} <strong>({{$marca->cant}})</strong></span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--container ends--> 
</section>
@endsection
@push('scripts')
<script>
    var route='{{asset('images/find.jpg') }}';
    $('.evento').parallax({imageSrc: route});
</script>

@endpush
