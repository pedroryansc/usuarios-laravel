<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create - Setores</title>
</head>
<body>
    @include("nav")

    <h1>Cadastro de Setor</h1>

    <form action="{{route('setor.store')}}" method="post">
        @include("setor.form")
    </form>
</body>
</html>