<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show - Usuários</title>
</head>
<body>
    @include("nav")

    <h1>Usuário {{$usuario->id}} - {{$usuario->nome}}</h1>
    
    <p><strong>ID:</strong> {{$usuario->id}}</p>
    <p><strong>Nome:</strong> {{$usuario->nome}}</p>
    <p><strong>E-mail:</strong> {{$usuario->email}}</p>
    <p><strong>Senha:</strong> {{$usuario->senha}}</p>
    <p><strong>Data de Nascimento:</strong> @php echo date_format(date_create($usuario->dataNascimento), "d/m/Y") @endphp</p>
    <p><strong>Setor:</strong> {{$usuario->setor->descricao}}</p>
    @if(isset($usuario->perfil->descricao)) <p><strong>Perfil:</strong> {{$usuario->perfil->descricao}}</p> @endif
    <p><strong>Criado em:</strong> @php echo date_format(date_create($usuario->created_at), "d/m/Y H:i:s") @endphp</p>
    <p><strong>Atualizado pela última vez em:</strong>
    @php echo date_format(date_create($usuario->updated_at), "d/m/Y H:i:s") @endphp</p>
</body>
</html>