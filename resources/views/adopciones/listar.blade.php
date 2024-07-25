@extends('plantilla')
@section('contenido')
<x-menu />
<h1>LISTADO DE ADOPCIONES</h1>
<div class="botones">
    <a class="btn btn-primary" href="/adopciones/registrar" role="button">Nueva Adopción</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Nombre Persona</th>
            <th scope="col">Mascota</th>
            <th scope="col">Fecha Adopción</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($adopciones as $adopcion)
        <tr>
            <td>{{ $adopcion->persona->nombre }}</td>
            <td>{{ $adopcion->mascota->nombre }}</td>
            <td>{{ $adopcion->fecha }}</td>
            <td>
                <a href="/adopciones/editar/{{$adopcion->id }}"> Editar</a>
                <a href="/adopciones/mostrar/{{$adopcion->id }}"> Mostrar</a>
                <form action="{{ route('adopciones.eliminar', $adopcion->id)}}" method="post">
                    <input class="btn btn-default" type="submit" value="Delete" />
                    @method('delete')
                    @csrf
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection