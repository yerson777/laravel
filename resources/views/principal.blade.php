<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTAS DE PERSONAS </title>
</head>
<body>
    <div style = "background: #f1f1f1; width: 45%; height: 150px">
        <h1>LISTAS DE PERSONAS</h1>
        @foreach ($noticias as $n)
            <p><b>ID:</b>{{$n['id']}}</p>
            <p><b>NOMBRE:</b>{{$n['Nombre']}}</p>
            <p><b>EDAD:</b>{{$n['Edad']}}</p>

            @if ($n['Edad'] >=18)
            mayor de edad   
            @else 
            menor de edad 
            @endif
            <p><b>----------------------</b></p>
        @endforeach
    </div>
    
</body>
</html>