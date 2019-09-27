<?php
use Illuminate\Support\Facades\Mail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mail', 'mailController@enviarmail');
/*
Route::get('/',function(){

		$datos=[
			"titulo"=>"Hola Destinatarios",
			"contenido"=>"Esto es la primer prueba de envio"
		];
		Mail::send("emails.test",$datos,function($mensaje){
			$mensaje->to("erisjinver@gmail.com","Israel")->subject("Mensaje importante de prueba");
		});
	
});
*/