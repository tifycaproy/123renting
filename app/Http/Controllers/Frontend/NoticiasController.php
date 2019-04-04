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


class NoticiasController extends Controller{

 public function index(Request $request){


 		$noticias= Noticias::find($request->id);

        return view('Frontend.noticia', compact('noticias'));
    }


}