@extends('plantilla')
@section('contenido')
<x-menu />
<br>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{ route('adopciones.actualizar', $adopcion->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="text" class="form-control" name="fecha" placeholder="Fecha" value="{{ $adopcion->fecha }}">
                </div>
                @if($errors->has('fecha'))
                <p>{{ $errors->first('fecha')}}</p>
                @endif
                <div class="mb-3">
                    <label for="persona_id" class="form-label">Persona</label>
                    <select name="persona_id" class="form-select">
                        @foreach ($personas as $persona)
                            <option value="{{$persona->id}}" {{ $persona->id === $adopcion->persona_id ? 'selected' : '' }}>{{ $persona->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                @if($errors->has('persona_id'))
                <p>{{ $errors->first('persona_id')}}</p>
                @endif
                <div class="mb-3">
                    <label for="mascota_id" class="form-label">Mascota</label>
                    <select name="mascota_id" class="form-select">
                        @foreach ($mascotas as $mascota)
                            <option value="{{$mascota->id}}" {{ $mascota->id === $adopcion->mascota_id ? 'selected' : '' }}>{{ $mascota->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                @if($errors->has('mascota_id'))
                <p>{{ $errors->first('mascota_id')}}</p>
                @endif
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        <div class="col">
        </div>
    </div>
</div>

@endsection