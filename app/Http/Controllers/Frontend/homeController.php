<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Noticias;
use App\Comentarios;
use App\Categorias;
use App\Servicios;
use App\Secciones;
use App\Formatos;
use App\SeccionesCampos;
use App\Campos;
use App\TiposCampos;
use App\Solicitantes;
use App\Solicitud;
use App\Preguntas;
use App\Mail\Contacto;
use App\Paises;
use App\Vehiculo;
use App\Marca;
use App\Combustible;
use App\Transmision;
use App\Modelo;
use App\TipoSubasta;
use App\Tipo;

use DB;
use Mail;


class homeController extends Controller{

    public function index(){

        $marcas = Marca::all();
        $modelos = Modelo::all();
        $tipos =Tipo::all();
        $sliders= Slider::where('publico', 1)->paginate(3);
        $noticias= Noticias::where('publico', 1)->inRandomOrder()->limit(3)->get();
        $comentarios = Comentarios::all();
        $vehiculos = Vehiculo::join('galeria', 'vehiculo.id', '=', 'galeria.id_vehiculo')
                            ->join('marcas', 'vehiculo.id_marca', '=', 'marcas.id')
                            ->join('modelos','vehiculo.id_modelo', '=', 'modelos.id')
                            ->where('vehiculo.id_tipo', 2)
                            ->select('vehiculo.id','galeria.img', 'fecha_matriculacion', 'kilometraje', 'marcas.descripcion as marca', 'modelos.descripcion as modelo' )->groupBy('vehiculo.id')->inRandomOrder()->limit(4)->get();
                      

        return view('Frontend.index', compact('sliders', 'noticias', 'vehiculos', 'comentarios','marcas', 'modelos', 'tipos'));
    }

    public function noticia(){
        return view('Frontend.noticia');
    }

    public function detalle(){
        return view('Frontend.detalle');
    }

    public function listado(){
        return view('Frontend.listado');
    }

    public function sesion(){
        return view('Frontend.sesion');
    }

    public function coches(Request $request){ 


        $marcas = Marca::all();
        $combustibles = Combustible::all();
        $transmisions = Transmision::all();
        $paises = Paises::all();
        $modelos = Modelo::all();

        $marca=$request->marca;
        $modelo=$request->modelo;
        $combustible=$request->combustible;
        $kilometraje=$request->kilometraje;
        $transmision=$request->transmision;
        $procedencia=$request->procedencia;
        $anio=$request->anio;
        
        $vehiculos = Vehiculo::join('galeria', 'vehiculo.id', '=', 'galeria.id_vehiculo')
                            ->join('marcas', 'vehiculo.id_marca', '=', 'marcas.id')
                            ->join('modelos','vehiculo.id_modelo', '=', 'modelos.id')
                            ->join('combustible','vehiculo.id_combustible', '=', 'combustible.id')
                            ->join('transmision','vehiculo.id_transmision', '=', 'transmision.id')
                            ->where('vehiculo.id_tipo', 2)
                            ->select('vehiculo.id','galeria.img', 'fecha_matriculacion', 'kilometraje', 'marcas.descripcion as marca', 'modelos.descripcion as modelo', 'cilindrada', 'potencia', 'transmision.descripcion as transmision', 'combustible.descripcion as combustible','normativa_emisiones_co2')
                              ->Marcas($marca)
                              ->Modelos($modelo)
                              ->Combustibles($combustible)
                              ->Kilometrajes($kilometraje)
                              ->Transmisions($transmision)
                              ->Procedencias($procedencia)
                              ->Anios($anio)
                              ->groupBy('vehiculo.id')
                              ->paginate(10);

           $anios = Vehiculo::select(DB::raw("YEAR(fecha_matriculacion) as anio"), DB::raw("COUNT(id) as cant"))
                               ->where(DB::raw("YEAR(fecha_matriculacion)"), DB::raw("YEAR(fecha_matriculacion)"))
                           ->where('id_tipo', 2)
                           ->groupBy(DB::raw("YEAR(fecha_matriculacion)"))
                           ->orderBy(DB::raw("YEAR(fecha_matriculacion)"), 'ASC')->get();

            $marcascant=Vehiculo::leftjoin('marcas', 'vehiculo.id_marca', '=', 'marcas.id')
                                ->where('vehiculo.id_tipo', 2)
                                 ->select('marcas.id','descripcion', DB::raw("(SELECT COUNT(vehiculo.id) FROM  vehiculo where marcas.id = vehiculo.id_marca and id_tipo=2)  as cant"))
                                ->groupBy('marcas.id')
                                ->orderBy('marcas.descripcion', 'ASC')->get();

         return view('Frontend.coches', compact('marcas', 'modelos', 'combustibles', 'transmisions', 'paises','vehiculos',  'marcascant', 'anios'));
   
}
   
    public function registro(){
        return view('Frontend.registro');
    }
}
