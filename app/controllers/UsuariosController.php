<?php

class UsuariosController extends BaseController {

  public function usuario(){
    return "Bienvenido al controlador para los usuarios";
  }


  public function get_index(){
    return "Nos encontramos en el index";
  }

  public function get_nosotros(){
    return "nosotros";
  }

  public function get_hola($hola){
    return "Hola ". $hola;
  }

  public function get_formulario(){
    $variable = Form::open(['url'=>'/usuarios/formulario','method'=>'post']);
    $variable .= Form::text('campo');
    $variable .= Form::submit('Enviar');
    $variable .= Form::close();
    return $variable;
  }


  public function post_formulario(){
    $campo = Input::get('campo');
    return 'El campo recibido es :' . $campo;
  }
}
