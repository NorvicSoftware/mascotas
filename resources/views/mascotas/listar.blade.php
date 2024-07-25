@extends('plantilla')
@section('contenido')
<x-menu />
<h1>LISTADO DE MASCOTAS</h1>
<div class="botones">
    <a class="btn btn-primary" href="/mascotas/registrar" role="button">Crear nueva mascota</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Codigo</th>
            <th scope="col">Tipo</th>
            <th scope="col">Edad</th>
            <th scope="col">Raza</th>
            <th scope="col">Color</th>
            <th scope="col">Pedigri</th>
            <th scope="col">Refugio</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mascotas as $mascota)
        <tr>
            <td>{{ $mascota->nombre }}</td>
            <td>{{ $mascota->codigo }}</td>
            <td>{{ $mascota->tipo }}</td>
            <td>{{ $mascota->edad }}</td>
            <td>{{ $mascota->raza }}</td>
            <td>{{ $mascota->color }}</td>
            <td>{{ $mascota->pedigri }}</td>
            <td>{{ $mascota->refugio->nombre }}</td>
            <td>{{ $mascota->refugio->ciudad }}</td>
            <td>
                <a href="/mascotas/editar/{{$mascota->id }}"> Editar</a>
                <a href="/mascotas/mostrar/{{$mascota->id }}"> Mostrar</a>
                <form action="{{ route('mascotas.eliminar', $mascota->id)}}" method="post">
                    <input class="btn btn-default" type="submit" value="Delete" />
                    @method('delete')
                    @csrf
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


<x-menu />
@endsection