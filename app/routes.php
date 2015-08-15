<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('prueba', function(){
	return "Hola esta es mi primera ruta...";
});


Route::get('crearusuario',function(){
	$usuario = new Usuario;
	$usuario->nombre = "tony";
	$usuario->apellido = "stark";
	$usuario->password = "admin";
	$usuario->email = "tony@stark.com";
	$usuario->save();
	return "El usuario se ha almacenado en la base de datos correctamente";
});
