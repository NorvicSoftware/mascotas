<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('refugios.actualizar', $refugio->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Refugio</label>
        <input name="nombre" value="{{ $refugio->nombre }}"/>
        <label>Ciudad</label>
        <input name="ciudad" value="{{ $refugio->ciudad }}"/>
        <label>Dirección</label>
        <input name="direccion" value="{{ $refugio->direccion }}"/>
        <label>Telefono</label>
        <input name="telefono" value="{{ $refugio->telefono }}"/>
        <label>Encargado</label>
        <input name="encargado" value="{{ $refugio->encargado }}"/>
        <button>Guardar</button>
    </form>
</body>

</html>