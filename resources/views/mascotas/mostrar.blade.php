@extends('plantilla')
@section('contenido')
<x-menu />
<br>
<div class="container">
    <h4>Mascota: {{ $mascota->nombre }}</h4>
    <h4>Tipo: {{ $mascota->tipo }}</h4>
    <h4>Edad: {{ $mascota->edad }}</h4>
    <h4>Refugio: {{ $mascota->refugio->nombre }}</h4>
    <h4>Ciudad: {{ $mascota->refugio->ciudad }}</h4>
    <h4>Encargado: {{ $mascota->refugio->encargado }}</h4>
    <img src="/storage/images/{{ $mascota->url }}"/>
</div>

@endsection