@extends('plantilla')
@section('contenido')
<x-menu />
<br>
<div class="container">
    <h4>Persona: {{ $adopcion->persona->nombre }}</h4>
    <h4>Mascota: {{ $adopcion->mascota->nombre }}</h4>
    <h4>Fecha Adopción: {{ $adopcion->fecha }}</h4>
</div>

@endsection