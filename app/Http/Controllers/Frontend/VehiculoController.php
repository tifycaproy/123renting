<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
// Modelos
use App\Vehiculo;
use App\Tipo;
use App\Modelo;
use App\Marca;
use App\Transmision;
use App\Combustible;
use App\Paises;
use App\Dano;
use App\Galeria;

class VehiculoController extends Controller
{

	public function detalleVehiculo(Request $request)
    {

    	$galerias=Galeria::where('id_vehiculo', $request->id)->get();



    	$vehiculo = Vehiculo::where('id',$request->id)->get();
    
 		
    	$danos = Dano::where('id_vehiculo',$request->id)->get();

    	$similares = Vehiculo::join('galeria', 'vehiculo.id', '=', 'galeria.id_vehiculo')
                            ->join('marcas', 'vehiculo.id_marca', '=', 'marcas.id')
                            ->join('modelos','vehiculo.id_modelo', '=', 'modelos.id')
                            ->where('vehiculo.id_tipo', 2)
                            ->select('vehiculo.id','galeria.img', 'fecha_matriculacion', 'kilometraje', 'marcas.descripcion as marca', 'modelos.descripcion as modelo' )->groupBy('vehiculo.id')->inRandomOrder()->limit(4)->get();



    	 return view('Frontend.detalle', compact('galerias', 'vehiculo', 'danos', 'similares'));

    }
 
 }