@extends("app")

@section("body")

<h1>Usuário {{$usuario->id}} - {{$usuario->nome}}</h1>

<p><strong>ID:</strong> {{$usuario->id}}</p>

<p><strong>Nome:</strong> {{$usuario->nome}}</p>

<p><strong>E-mail:</strong> {{$usuario->email}}</p>

<p><strong>Senha:</strong> {{$usuario->senha}}</p>

<p><strong>Data de Nascimento:</strong> {{date_format(date_create($usuario->dataNascimento), "d/m/Y")}}</p>

<p><strong>Setor:</strong> {{$usuario->setor->descricao}}</p>

@if(isset($usuario->perfil)) <p><strong>Perfil:</strong> {{$usuario->perfil->descricao}}</p> @endif

<p><strong>Criado em:</strong> {{date_format(date_create($usuario->created_at), "d/m/Y H:i:s")}}</p>

<p><strong>Atualizado pela última vez em:</strong>
    {{date_format(date_create($usuario->updated_at), "d/m/Y H:i:s")}}
</p>

<br>

@if(filled($usuario->funcoes))
<p><strong>Funções (ordenadas da data de início mais recente para a mais antiga):</strong></p>
<table border="1">
    <thead>
        <th>Descrição</th>
        <th>Data de Início</th>
    </thead>
    <tbody>
        @foreach($funcoes as $funcao)
        @foreach($usuario->funcoes as $funcaoCompleta)
        @if($funcao->funcao_id == $funcaoCompleta->pivot->funcao_id)
        <tr>
            <td>{{$funcaoCompleta->descricao}}</td>
            <td>
                @if(isset($funcaoCompleta->pivot->dataInicio))
                {{date_format(date_create($funcaoCompleta->pivot->dataInicio), "d/m/Y")}}
                @endif
            </td>
        </tr>
        @endif
        @endforeach
        @endforeach
    </tbody>
</table>
@endif

@endsection