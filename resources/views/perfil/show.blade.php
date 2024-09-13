@extends("app")

@section("body")

<h1>Perfil de {{$perfil->usuario->nome}} - {{$perfil->descricao}}</h1>

<p><strong>ID do Usuário:</strong> {{$perfil->usuario_id}}</p>
<p><strong>Nome do Usuário:</strong> {{$perfil->usuario->nome}}</p>
<p><strong>E-mail do Usuário:</strong> {{$perfil->usuario->email}}</p>
<p><strong>Descrição do Perfil:</strong> {{$perfil->descricao}}</p>
<p><strong>Criado em:</strong> {{date_format(date_create($perfil->created_at), "d/m/Y H:i:s")}}</p>
<p><strong>Atualizado pela última vez em:</strong>
    {{date_format(date_create($perfil->updated_at), "d/m/Y H:i:s")}}
</p>

@endsection("body")