<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit - Usuários</title>
</head>
<body>
    @include("nav")

    <h1>Edição de Usuário</h1>

    <form action="{{route('usuario.update', $usuario->id)}}" method="post">
        @method("PUT")
        @include("usuario.form")
    </form>
</body>
</html>