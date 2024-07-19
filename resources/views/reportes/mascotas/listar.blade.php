@extends('plantilla')
@section('contenido')
<x-menu />
<h1>REPORTE DE MASCOTAS MAYORES A 5 AÑOS</h1>

<a href="{{ route('reportes.mascota.pdf')}}">GENERAR ARCHIVO PDF</a>

<a href="{{ route('reportes.mascota.excel')}}">GENERAR ARCHIVO EXCEL</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Tipo</th>
            <th scope="col">Edad</th>
            <th scope="col">Refugio</th>
            <th scope="col">Ciudad</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mascotas as $mascota)
        <tr>
            <td>{{ $mascota->codigo }}</td>
            <td>{{ $mascota->nombre }}</td>
            <td>{{ $mascota->tipo }}</td>
            <td>{{ $mascota->edad }}</td>
            <td>{{ $mascota->refugio }}</td>
            <td>{{ $mascota->ciudad }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection