<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>agregar</h1>
        <form method="POST" action="{{ route('eventos.store') }}">
            @csrf
            <label for="nombre">Numero de ticket:</label>
            <input type="text" name="ticket_numero" id="ticket_numero" required>
            <br>
            <label for="numero_ticker">Descripcion:</label>
            <input type="text" name="descripcion" id="descripcion" required>
            <br>
            <button type="submit">Guardar Evento</button>
        </form>
        <br>
        <p>{{ session('success') }}</p>
</body>
</html>