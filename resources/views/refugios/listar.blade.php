<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Refugio</th>
                <th>Ciudad</th>
                <th>Dirección</th>
                <th>Telefono</th>
                <th>Encargado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($refugios as  $refugio)
                <tr>
                    <td>{{ $refugio->nombre }}</td>
                    <td>{{ $refugio->ciudad }}</td>
                    <td>{{ $refugio->direccion }}</td>
                    <td>{{ $refugio->telefono }}</td>
                    <td>{{ $refugio->encargado }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
    
</body>
</html>