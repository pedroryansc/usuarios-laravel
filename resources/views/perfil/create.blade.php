<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create - Perfis</title>
</head>
<body>
    @include("nav")

    <h1>Cadastro de Perfil</h1>

    <form action="{{route('perfil.store')}}" method="post">
        @include("perfil.form")
    </form>
</body>
</html>