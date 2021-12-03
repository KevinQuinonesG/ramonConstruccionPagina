<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba de Correo</title>
</head>
<body>
    <h1>Nuevo correo de contacto</h1>
    <p>Mensaje de: {{ $details ['name']}}</p>
    <p>Correo: {{ $details ['email'] }} </p>
    <p>Número de telefono: {{ $details ['numero']}} </p>
    <h3>Motivo: {{ $details ['motivo'] }}</h3>
    <h4>{{ $details ['descripcion'] }}</h4>
</body>
</html>