@extends('plantilla')
@section('contenido')
<x-menu />
<br>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{ route('refugios.actualizar', $refugio->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="nombre" class="form-label">Refugio</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Refugio" value="{{ $refugio->nombre }}">
                </div>
                @if($errors->has('nombre'))
                <p>{{ $errors->first('nombre')}}</p>
                @endif
                <div class="mb-3">
                    <label for="ciudad" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" name="ciudad" placeholder="Ciudad" value="{{ $refugio->ciudad }}">
                </div>
                @if($errors->has('ciudad'))
                <p>{{ $errors->first('ciudad')}}</p>
                @endif
                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <input type="text" class="form-control" name="direccion" placeholder="Dirección" value="{{ $refugio->direccion }}">
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" name="telefono" placeholder="Teléfono" value="{{ $refugio->telefono }}">
                </div>
                <div class="mb-3">
                    <label for="encargado" class="form-label">Encargado</label>
                    <input type="text" class="form-control" name="encargado" placeholder="Encargado" value="{{ $refugio->encargado }}">
                </div>
                @if($errors->has('encargado'))
                <p>{{ $errors->first('encargado')}}</p>
                @endif
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        <div class="col">
        </div>
    </div>
</div>

@endsection