@extends('plantilla')
@section('contenido')
<x-menu />
<h1>LISTADO DE PERSONAS</h1>
<div class="botones">
    <a class="btn btn-primary" href="/personas/registrar" role="button">Crear nuevo Persona</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">DNI</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">Dirección</th>
            <th scope="col">Telefono</th>
            <th scope="col">Acciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($personas as $persona)
        <tr>
            <td>{{ $persona->dni }}</td>
            <td>{{ $persona->nombre }}</td>
            <td>{{ $persona->direccion }}</td>
            <td>{{ $persona->telefono }}</td>
            <td>
                <a href="/personas/editar/{{$persona->id }}"> Editar</a>
                <a href="/personas/mostrar/{{$persona->id }}"> Mostrar</a>

                <form action="{{ route('personas.eliminar', $persona->id)}}" method="post">

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