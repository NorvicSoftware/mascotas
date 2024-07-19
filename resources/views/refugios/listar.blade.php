@extends('plantilla')
@section('contenido')
<x-menu />
<h1>LISTADO DE REFUGIOS</h1>
<div class="botones">
    <button type="button" class="btn btn-primary">Crear nuevo Refugio</button>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Refugio</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Dirección</th>
            <th scope="col">Telefono</th>
            <th scope="col">Encargado</th>
            <th scope="col">Acciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($refugios as $refugio)
        <tr>
            <th scope="row">{{ $refugio->nombre }}</th>
            <td>{{ $refugio->ciudad }}</td>
            <td>{{ $refugio->direccion }}</td>
            <td>{{ $refugio->telefono }}</td>
            <td>{{ $refugio->encargado }}</td>
            <td>
                <a href="/refugios/editar/{{$refugio->id }}"> Editar</a>
                <a href="/refugios/mostrar/{{$refugio->id }}"> Mostrar</a>

                <form action="{{ route('refugios.eliminar', $refugio->id)}}" method="post">

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