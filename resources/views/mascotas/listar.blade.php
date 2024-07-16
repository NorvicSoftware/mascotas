<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        thead {
            color: red;
        }
    </style>
</head>
<body>
<table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>Tipo</th>
                <th>Edad</th>
                <th>Raza</th>
                <th>Color</th>
                <th>Pedigri</th>
                <th>Refugio</th>
                <th>Ciudad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mascotas as  $mascota)
                <tr>
                    <td>{{ $mascota->nombre }}</td>
                    <td>{{ $mascota->codigo }}</td>
                    <td>{{ $mascota->tipo }}</td>
                    <td>{{ $mascota->edad }}</td>
                    <td>{{ $mascota->raza }}</td>
                    <td>{{ $mascota->color }}</td>
                    <td>{{ $mascota->pedigri }}</td>
                    <td>{{ $mascota->refugio->nombre }}</td>
                    <td>{{ $mascota->refugio->ciudad }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>
</html>