<table>
    <thead>
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Edad</th>
            <th>Refugio</th>
            <th>Ciudad</th>
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