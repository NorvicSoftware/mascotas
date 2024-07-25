@extends('plantilla')
@section('contenido')
<x-menu />
<br>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{ route('mascotas.registrar') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                </div>
                @if($errors->has('nombre'))
                <p>{{ $errors->first('nombre')}}</p>
                @endif
                <div class="mb-3">
                    <label for="codigo" class="form-label">Código</label>
                    <input type="text" class="form-control" name="codigo" placeholder="Código">
                </div>
                @if($errors->has('codigo'))
                <p>{{ $errors->first('codigo')}}</p>
                @endif
                <div class="mb-3">
                    <label for="tipo" class="form-label">Tipo</label>
                    <select name="tipo" class="form-select">
                        <option value="Perro">Perro</option>
                        <option value="Gato">Gato</option>
                        <option value="Cabras">Cabras</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="edad" class="form-label">Edad</label>
                    <input type="text" class="form-control" name="edad" placeholder="Edad">
                </div>
                @if($errors->has('edad'))
                <p>{{ $errors->first('edad')}}</p>
                @endif
                <div class="mb-3">
                    <label for="raza" class="form-label">Raza</label>
                    <input type="text" class="form-control" name="raza" placeholder="Raza">
                </div>
                @if($errors->has('raza'))
                <p>{{ $errors->first('raza')}}</p>
                @endif
                <div class="mb-3">
                    <label for="color" class="form-label">Color</label>
                    <input type="text" class="form-control" name="color" placeholder="Color">
                </div>
                @if($errors->has('color'))
                <p>{{ $errors->first('color')}}</p>
                @endif
                <div class="mb-3">
                    <label for="pedigri" class="form-label">Pedigri</label>
                    <input type="text" class="form-control" name="pedigri" placeholder="Pedigri">
                </div>
                <div class="mb-3">
                    <label for="refugio_id" class="form-label">Refugio</label>
                    <select name="refugio_id" class="form-select">
                        @foreach ($refugios as $refugio)
                            <option value="{{$refugio->id}}">{{ $refugio->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                @if($errors->has('refugio_id'))
                <p>{{ $errors->first('refugio_id')}}</p>
                @endif
                <div class="mb-3">
                    <label for="image" class="form-label">Imagen Mascota</label>
                    <input type="file" name="image"/>
                </div>
                
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        <div class="col">
        </div>
    </div>
</div>

@endsection