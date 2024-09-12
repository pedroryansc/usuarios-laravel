<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show - Funções</title>
</head>
<body>
    @include("nav")

    <h1>Função {{$funcao->id}}</h1>
    
    <p><strong>ID:</strong> {{$funcao->id}}</p>
    <p><strong>Descrição:</strong> {{$funcao->descricao}}</p>
</body>
</html>