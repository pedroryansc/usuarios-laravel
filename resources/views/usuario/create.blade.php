<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create - Usuários</title>
</head>
<body>
    @include("nav")

    <h1>Cadastro de Usuário</h1>

    <form action="{{route('usuario.store')}}" method="post">
        @include("usuario.form")
    </form>
</body>
</html>