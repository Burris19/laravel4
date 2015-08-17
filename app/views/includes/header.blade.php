<nav class="navbar navbar-inverse">
  <div class="navbar header">
    <a class="navbar-brand" href="{{ URL::to('usuarios')}}">Alerta Usuarios</a>
  </div>
  <ul>
    <li><a href="{{ URL::to('usuarios')}}">Vista de todos los usuarios</a></li>
    <li><a href="{{ URL::to('usuarios/crearusuario')}}">Crear Usuario</a></li>
  </ul>

</nav>
