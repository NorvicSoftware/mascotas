<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
    <form action="{{ route('refugios.registrar') }}" method="POST">
        @csrf
        <label>Refugio</label>
        <input name="nombre" />
        @if($errors->has('nombre'))
        <p>{{ $errors->first('nombre')}}</p>
        @endif
        <label>Ciudad</label>
        <input name="ciudad" />
        @if($errors->has('ciudad'))
        <p>{{ $errors->first('ciudad')}}</p>
        @endif
        <label>Dirección</label>
        <input name="direccion" />
        <label>Telefono</label>
        <input name="telefono" />
        <label>Encargado</label>
        <input name="encargado" />
        @if($errors->has('encargado'))
        <p>{{ $errors->first('encargado')}}</p>
        @endif
        <button>Guardar</button>
        
    </form>
    <x-menu/>
</body>
</html>