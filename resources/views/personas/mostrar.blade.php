@extends('plantilla')
@section('contenido')
<x-menu />
<br>
<div class="container">
    <h4>DNI: {{ $persona->dni }}</h4>
    <h4>Persona: {{ $persona->nombre }}</h4>
    <h4>Teléfono: {{ $persona->telefono }}</h4>
    <h4>Dirección: {{ $persona->direccion }}</h4>
</div>

@endsection