<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit - Perfis</title>
</head>
<body>
    @include("nav")

    <h1>Edição de Perfil</h1>

    <form action="{{route('perfil.update', $perfil->usuario_id)}}" method="post">
        @method("PUT")
        @include("perfil.form")
    </form>
</body>
</html>