<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;


class Contacto extends Mailable
{

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    /**
     * Build the message.
     *
     * @return $this
     */

     public function build(Request $request)
    {


        $nombre    =$request['nombre'];
        $email    =$request['email'];
        $mensaje =$request['mensaje'];



        return $this->from('irenemontilla16@gmail.com')
                    ->view('emails.contacto')
                    ->with([
                            'nombre' => $nombre,
                            'email' => $email,
                            'mensaje' => $mensaje,
                      ])
                    ->subject('Mensaje Web');
    }

}