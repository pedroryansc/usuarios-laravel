<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create - Funções</title>
</head>
<body>
    @include("nav")

    <h1>Cadastro de Função</h1>

    <form action="{{route('funcao.store')}}" method="post">
        @include("funcao.form")
    </form>
</body>
</html>