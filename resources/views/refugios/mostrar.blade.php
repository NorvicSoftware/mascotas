@extends('plantilla')
@section('contenido')
<x-menu />
<br>
<div class="container">
    <h4>Refugio: {{ $refugio->nombre }}</h4>
    <h4>Ciudad: {{ $refugio->ciudad }}</h4>
    <h4>Encargado: {{ $refugio->encargado }}</h4>
</div>

@endsection