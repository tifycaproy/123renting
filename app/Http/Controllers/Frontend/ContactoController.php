<?php
namespace App\Http\Controllers\Frontend;


use Mail; 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Mail\Contacto; 
use Illuminate\Http\Request;

class ContactoController extends Controller
{
  
        /**
        * Validamos y enviamos los datos a la clase Contacto
        **/
    public function procesar(Request $request)
    {

      $rules = [
            'email' => 'required|email',
            'nombre' => 'required',
            'mensaje' => 'required',
        ];


 $messages = [
            'nombre.required' => 'El Nombre es Requerido',
            'mensaje.required' => 'El Mensaje es Requerido',
            'email.required' => 'El Email es Requerido',
            'email.email' => 'El formato de email es incorrecto',
            ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
        
        if ($validator->fails())
        {
           return response()->json(['error'=>$validator->errors()]);
        }
        $forminput = [
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email'),
            'mensaje' => $request->input('mensaje')
        ];

        /**
        * No olvides cambiar el correo aquí. 
        * Este es el correo donde vas a recibir 
        * los mensajes.
        **/
        Mail::to('irenemontilla16@gmail.com')->send(new Contacto($forminput));

        return response()->json(['success'=>'¡Mensaje enviado! Gracias por contactarnos.']);
         
    }
}