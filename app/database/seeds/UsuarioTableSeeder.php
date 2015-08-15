<?php

class UsuarioTableSeeder extends Seeder {

  public function run() {
    $usuario = new Usuario;
    $usuario->nombre = 'steven';
    $usuario->apellido = 'rogers';
    $usuario->password = 'admin';
    $usuario->email = 'capitan@america.com';
    $usuario->save();

    $usuario = new Usuario;
    $usuario->nombre = 'natashaf';
    $usuario->apellido = 'romanof';
    $usuario->password = 'admin';
    $usuario->email = 'viuda@negra.com';
    $usuario->save();

  }
}
