<html>
<head>
    <title>PDF</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <img src="img/mascotas.jpg"  style="width: 80px; height:80px"/>
<h1>REPORTE DE MASCOTAS MAYORES A 5 AÑOS</h1>
<p>fecha de impresion:{{ now() }}</p>
<p>usuario: Victor Peña</p>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Tipo</th>
            <th scope="col">Edad</th>
            <th scope="col">Refugio</th>
            <th scope="col">Ciudad</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mascotas as $mascota)
        <tr>
            <td>{{ $mascota->codigo }}</td>
            <td>{{ $mascota->nombre }}</td>
            <td>{{ $mascota->tipo }}</td>
            <td>{{ $mascota->edad }}</td>
            <td>{{ $mascota->refugio }}</td>
            <td>{{ $mascota->ciudad }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>