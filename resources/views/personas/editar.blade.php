@extends('plantilla')
@section('contenido')
<x-menu />
<br>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{ route('personas.actualizar', $persona->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="dni" class="form-label">DNI</label>
                    <input type="text" class="form-control" name="dni" placeholder="DNI" value="{{ $persona->dni }}">
                </div>
                @if($errors->has('dni'))
                <p>{{ $errors->first('dni')}}</p>
                @endif
                <div class="mb-3">
                    <label for="nombre" class="form-label">persona</label>
                    <input type="text" class="form-control" name="nombre" placeholder="persona" value="{{ $persona->nombre }}">
                </div>
                @if($errors->has('nombre'))
                <p>{{ $errors->first('nombre')}}</p>
                @endif
                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control" name="direccion" placeholder="Dirección" value="{{ $persona->direccion }}">
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" name="telefono" placeholder="Teléfono" value="{{ $persona->telefono }}">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        <div class="col">
        </div>
    </div>
</div>

@endsection