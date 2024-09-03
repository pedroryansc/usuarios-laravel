<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show - Perfis</title>
</head>
<body>
    @include("nav")

    <h1>Perfil de {{$perfil->usuario->nome}} - {{$perfil->descricao}}</h1>
    
    <p><strong>ID do Usuário:</strong> {{$perfil->usuario_id}}</p>
    <p><strong>Nome do Usuário:</strong> {{$perfil->usuario->nome}}</p>
    <p><strong>E-mail do Usuário:</strong> {{$perfil->usuario->email}}</p>
    <p><strong>Descrição do Perfil:</strong> {{$perfil->descricao}}</p>
    <p><strong>Criado em:</strong> @php echo date_format(date_create($perfil->created_at), "d/m/Y H:i:s") @endphp</p>
    <p><strong>Atualizado pela última vez em:</strong>
    @php echo date_format(date_create($perfil->updated_at), "d/m/Y H:i:s") @endphp</p>
</body>
</html>