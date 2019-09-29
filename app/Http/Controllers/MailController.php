<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

class MailController extends controller
{
   
	public function enviarmail(){
		

		$datos=[
			'titulo'=>'Hola Destinatarios Prueba gmail',
			'contenido'=>'Esto es la primer prueba de envio'
		];
		Mail::send("emails.test",$datos,function($mensaje){
			$mensaje->to("erisjinver@gmail.com", "Israel")->subject("Mensaje importante de prueba");
		});
		return "Email 2 enviado con exito";
	}

}
