@php
use Carbon\Carbon; 
@endphp

@extends ('Frontend.layouts.layout')

@section('contenido')
<style type="text/css">
    .row {
    display:-ms-flexbox;
    display:flex;
    -ms-flex-wrap:wrap;
    flex-wrap:wrap;
    margin-right:-5px;
    margin-left:-5px;
}
.col-6 {
    -ms-flex:0 0 50%;
    flex:0 0 50%;
    max-width:50%
}
</style>
<div class="clearfix"></div>
<section id="secondary-banner" class="dynamic-image-8" style="background-image: url(&quot;{{asset('images/slide-2.jpg')}}&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <h2>Detalles del Coche</h2>
                {{-- <h4>Powerful Inventory Marketing, Fully Integrated</h4> --}}
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 ">
                <ul class="breadcrumb">
                <li><a href="{{route('/')}}">Inicio</a></li>
                <li><a href="{{route('coches')}}">Coches</a></li>
                    <li>Detalle del Coche</li>
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
        <div class="inner-page inventory-listing">
            <div class="inventory-heading margin-bottom-10 clearfix">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                        <?php  $anio=Carbon::parse($vehiculo[0]->fecha_matriculacion); ?>
                        <h2>{{$anio->year}} {{$vehiculo[0]->marca->descripcion}} {{$vehiculo[0]->modelo->descripcion}}</h2>
                        <span class="margin-top-10"></span> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 left-content padding-left-none"> 

                    <div class="">
             <section class="slider">
                    <div id="slider" class="flexslider">
                      <ul class="slides">
                        @foreach( $galerias as $galeria )
                            <li> <img src="{{ url('http://localhost/123subasta/public//images/galeria/'.$galeria->img) }}" alt="" /> </li>
                        @endforeach
                      </ul>
                    </div>
                    <div id="carousel" class="flexslider">
                      <ul class="slides">
                        @foreach( $galerias as $galeria )
                            <li> <img src="{{ url('http://localhost/123subasta/public//images/galeria/'.$galeria->img) }}" alt="" /> </li>
                        @endforeach
                      </ul>
                    </div>
                  </section>
                    </div>
                    <!--CLOSE OF SLIDER--> 
                    <!--Slider End-->
                    <div class="clearfix"></div>
                    <div class="bs-example bs-example-tabs example-tabs margin-top-50">
                        <ul id="myTab" class="nav nav-tabs">
                            <li class="active"><a href="#vehicle" data-toggle="tab">Perfil del vehículo</a></li>
                            <li><a href="#features" data-toggle="tab">Equipamiento</a></li>
                            <li><a href="#technical" data-toggle="tab">Daños</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content margin-top-15 margin-bottom-20">
                            <div class="tab-pane fade in active" id="vehicle">
                                <div class="title">
                                    <div class="row">
                                        <div class="col">
                                            <h4>Especificaciones</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="lines-group">
                                    <div class="line">
                                        <div class="row">
                                            <div class="col-6">Matriculado por primera vez el</div>
                                            <div class="col-6"> {!!  date("d/m/Y", strtotime($vehiculo[0]->fecha_matriculacion)) !!}</div>
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="row">
                                            <div class="col-6">Kilometraje</div>
                                            <div class="col-6">{{$vehiculo[0]->kilometraje}} Km</div>
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="row">
                                            <div class="col-6">Tipo de combustible</div>
                                            <div class="col-6">{{$vehiculo[0]->combustible->descripcion}}</div>
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="row">
                                            <div class="col-6">Tipo de transmisión</div>
                                            <div class="col-6">{{$vehiculo[0]->transmision->descripcion}}</div>
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="row">
                                            <div class="col-6">Normativa sobre emisiones de CO²</div>
                                            <div class="col-6">{{$vehiculo[0]->normativa_emisiones_co2}}</div>
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="row">
                                            <div class="col-6">Emisiones de CO² (valor mínimo)</div>
                                            <div class="col-6">{{$vehiculo[0]->emisiones_co2_valor_minimo}}</div>
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="row">
                                            <div class="col-6">Potencia</div>
                                            <div class="col-6">{{$vehiculo[0]->potencia}}</div>
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="row">
                                            <div class="col-6">Cilindrada del motor</div>
                                            <div class="col-6">{{$vehiculo[0]->cilindrada}}</div>
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="row">
                                            <div class="col-6">Tipo de carrocería</div>
                                            <div class="col-6">{{$vehiculo[0]->tipo_carroceria}}</div>
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="row">
                                            <div class="col-6">Puertas</div>
                                            <div class="col-6">{{$vehiculo[0]->puertas}}</div>
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="row">
                                            <div class="col-6">Número de puestos</div>
                                            <div class="col-6">{{$vehiculo[0]->numero_puestos}}</div>
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="row">
                                            <div class="col-6">Número de bastidor</div>
                                            <div class="col-6">{{$vehiculo[0]->numero_bastidor}}</div>
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="row">
                                            <div class="col-6">Número de bastidor (abreviado)</div>
                                            <div class="col-6">{{$vehiculo[0]->numero_bastidor_abreviado}}</div>
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="row">
                                            <div class="col-6">Juegos de llaves</div>
                                            <div class="col-6">{{$vehiculo[0]->juego_llaves}}</div>
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="row">
                                            <div class="col-6">Color de carrocería</div>
                                            <div class="col-6">{{$vehiculo[0]->color_carroceria}}</div>
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="row">
                                            <div class="col-6">Color interior</div>
                                            <div class="col-6">{{$vehiculo[0]->color_interior}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title">
                                    <div class="row">
                                        <div class="col">
                                            <h4>Documentos e Historial</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="lines-group">
                                    <div class="line">
                                        <div class="row">
                                            <div class="col-6">Permiso de circulación</div>
                                            @if($vehiculo[0]->permiso_circulacion==1)   
                                                <div class="col-6">Si</div>
                                            @else
                                                <div class="col-6">No</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="row">
                                            <div class="col-6">Certificado de conformidad (CdC)</div>
                                            @if($vehiculo[0]->certificado_conformidad==1)   
                                                <div class="col-6">Si</div>
                                            @else
                                                <div class="col-6">No</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="row">
                                            <div class="col-6">Registro de mantenimiento</div>
                                            @if($vehiculo[0]->registro_mantenimiento==1)   
                                                <div class="col-6">Si</div>
                                            @else
                                                <div class="col-6">No</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="row">
                                            <div class="col-6">Última fecha de revisión</div>
                                            <div class="col-6">{!!  date("d/m/Y", strtotime($vehiculo[0]->ultima_revision)) !!}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title">
                                    <div class="row">
                                        <div class="col"><h4>Procedencia</h4></div>
                                    </div>
                                </div>
                                <div class="lines-group">
                                    <div class="line">
                                        <div class="row">
                                            <div class="col-6">Lugar de recogida</div>
                                            <div class="col-6">{{$vehiculo[0]->lugarRecogida->desc}}</div>
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="row">
                                            <div class="col-6">País de origen</div>
                                            <div class="col-6">{{$vehiculo[0]->paisOrigen->desc}}</div>
                                        </div>
                                    </div>
                                    <div class="line">
                                            <div class="row">
                                                <div class="col-6">Oficina de venta</div>
                                                <div class="col-6">{{$vehiculo[0]->oficinaVenta->desc}}</div>
                                            </div>
                                    </div>
                                 </div>
                            </div>
                            <div class="tab-pane fade" id="features">
                                <div class="col-md-12">
                                    <h4>Comodidad</h4>
                                </div>
                                <ul class="fa-ul">
                                    @if($vehiculo[0]->aire_acondicionado==1)
                                    <li><i class="fa-li fas fa-check"></i>Aire acondicionado</li>
                                    @endif
                                    @if($vehiculo[0]->control_distancia==1)
                                    <li><i class="fa-li fas fa-check"></i>Control a distancia</li>
                                    @endif
                                    @if($vehiculo[0]->nav_satelite==1)
                                    <li><i class="fa-li fas fa-check"></i>Navegación por satélite</li>
                                    @endif
                                    @if($vehiculo[0]->volante_multifuncional==1)
                                    <li><i class="fa-li fas fa-check"></i>Volante multifuncional</li>
                                    @endif
                                    @if($vehiculo[0]->direccion_asistida==1)
                                    <li><i class="fa-li fas fa-check"></i>Dirección asistida</li>
                                    @endif
                                    @if($vehiculo[0]->interfal_bluetooth==1)
                                    <li><i class="fa-li fas fa-check"></i>Interfaz Bluetooth</li>
                                    @endif
                                    @if($vehiculo[0]->elevalunas_electrico==1)
                                    <li><i class="fa-li fas fa-check"></i>Elevalunas eléctrico</li>
                                    @endif
                                    @if($vehiculo[0]->retrovisores_exteriores_calefactables==1)
                                    <li><i class="fa-li fas fa-check"></i>Retrovisores calefactables</li>
                                    @endif
                                     @if($vehiculo[0]->retrovisores_exteriores_electricos==1)
                                    <li><i class="fa-li fas fa-check"></i>Retrovisores eléctricos</li>
                                    @endif
                                </ul>
                                <div class="col-md-12">
                                    <h4>Acabado</h4>
                                </div>
                                 <ul class="fa-ul">
                                    @if($vehiculo[0]->tapiceria==1)
                                    <li><i class="fa-li fas fa-check"></i>Tapicería</li>
                                    @endif
                                    @if($vehiculo[0]->volante_cuero==1)
                                    <li><i class="fa-li fas fa-check"></i>Volante de cuero</li>
                                    @endif
                                    @if($vehiculo[0]->pintura_metalizada==1)
                                    <li><i class="fa-li fas fa-check"></i>Pintura metalizada</li>
                                    @endif
                                </ul>
                                <div class="col-md-12">
                                    <h4>Ruedas y neumáticos</h4>
                                </div>
                                <ul class="fa-ul">
                                    @if($vehiculo[0]->llantas_aleacion==1)
                                    <li><i class="fa-li fas fa-check"></i>Llantas de aleación:</li>
                                    @endif
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="technical">
                                <div class="col-12">
                                    <h4>Documentación</h4>
                                </div>
                                @if(count($danos)>0)
                                <li><a target="_blank"  href="/archivos/daños/pdf/{{$danos[0]->archivo}}" class="link">Descargar informe de daños</a> <i class="fa fa-file-pdf-o"></i></li>
                                <div class="damages-description">
                                    <h4>Observaciones</h4>
                                    <p>{{ $danos[0]->descripcion }}</p>
                                </div>
                                @else
                                <br>
                                 <h5>Informe de Daños no Registrados</h5>
                              
                                @endif
                            </div>
                       </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 right-content padding-right-none">
                    <div class="side-content"> 
                        <div class="efficiency-rating text-center padding-vertical-15 margin-bottom-40">
                                <h3 style="color:black">Iva no inc / mes *</h3>
                            <h2 style="color:#EC4B25;"><b>$299.00</b></h2>
                            <h3 style="color:black">48 Meses | 60000 Km <br>

                                <br>
                                <button type="submit" name="add-to-cart" value="1002" class="single_add_to_cart_button button alt lg-button">
                                        Obtén tu Cotización
                                </button>

                        </div> 
                </div>
            </div>
            <div class="clearfix"></div>
            
        </div>
    </div>
    <!--container ends--> 
            <h4 class="margin-bottom-25 margin-top-none" style="color: #EC4B25;"><strong>SIMILARES</strong> </h4>
    <div class="inventory_box car_listings boxed boxed_full row" style="margin-bottom: 100px">
         @foreach( $similares as $similar )
         <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12" style="height: 250px; overflow: hidden; padding-right: 0px">
                            <?php  $anio=Carbon::parse($similar->fecha_matriculacion); ?>
                            <a class="" href="{{url('categorias/listado/detalle/'.$similar->id)}}">
                                <div class="title" style="font-size: 2rem; color: black; margin-bottom: 10px">{{$similar->marca}} {{$similar->modelo}} {{$anio->year}}</div> 
                                <div class="" style="background-image: url('{{ url('http://localhost/123subasta/public/images/galeria/'.$similar->img) }}'); background-position: center center; background-repeat: no-repeat; background-size: cover; height: 100%; width: 100%">
                                 
                                
                                    <div class="" style="background-color: rgba(0,0,0,.7); position: absolute; bottom: 0; width: 100%; padding: 10px; text-align: center; font-size: 3rem; font-weight: bold">
                                        $43,995
                                    </div>
                                </div>
                            </a> 

                        </div>

                        @endforeach

    </div>
</section>
<!--content ends-->
<div class="clearfix"></div>

@endsection
@push('scripts')
<script>
    var route='{{asset('images/find.jpg') }}';
    $('.evento').parallax({imageSrc: route});

    
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 210,
        itemMargin: 5,
        asNavFor: '#slider'
      });

      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  
</script>

@endpush