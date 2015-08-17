@extends('layout.default');

@section('contenido')
  <table class="">
    <thead>
      <tr>
        <th>id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($usuarios as $key => $value)
        <tr>
          <th>{{ $value->id }}</th>
          <th>{{ $value->nombre }}</th>
          <th>{{ $value->apellido }}</th>
          <th>{{ $value->email }}</th>
        </tr>
      @endforeach
    </tbody>
  </table>
@stop
