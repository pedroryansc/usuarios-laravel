<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit - Funções</title>
</head>
<body>
    @include("nav")

    <h1>Edição de Função</h1>

    <form action="{{route('funcao.update', $funcao->id)}}" method="post">
        @method("PUT")
        @include("funcao.form")
    </form>
</body>
</html>