<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>
<body>
<ul>
<h1>CLIENTE</h1>
@foreach ($eventos as $evento)
    <strong>ticket:</strong> {{ $evento->ticket_numero }}<br>

    <strong>descripcion:</strong> {{ $evento->descripcion }}<br>
@endforeach

</ul>
</body>
</html>