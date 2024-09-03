<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit - Setores</title>
</head>
<body>
    @include("nav")

    <h1>Edição de Setor</h1>

    <form action="{{route('setor.update', $setor->id)}}" method="post">
        @method("PUT")
        @include("setor.form")
    </form>
</body>
</html>