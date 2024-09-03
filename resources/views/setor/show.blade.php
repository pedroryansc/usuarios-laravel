<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show - Setores</title>
</head>
<body>
    @include("nav")

    <h1>Setor {{$setor->id}}</h1>
    
    <p><strong>ID:</strong> {{$setor->id}}</p>
    <p><strong>Descrição:</strong> {{$setor->descricao}}</p>
</body>
</html>