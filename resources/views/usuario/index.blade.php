@extends("app")

@section("body")

<h1>Usuários</h1>

<form action="{{route('usuario.index')}}" method="post">
    @csrf
    @method("GET")
    <p>
        <input type="search" name="pesquisa" placeholder="Pesquisar pelo nome ou e-mail do usuário" size="35"
            value="{{request('pesquisa')}}">

        <select name="mes">
            <option value="">Selecione o mês de aniversário</option>
            @foreach(range(1, 12) as $mes)
            <option value="{{$mes}}" {{request("mes") == $mes ? "selected" : ""}}>
                {{ strftime("%B", mktime(0, 0, 0, $mes, 1)) }}
            </option>
            @endforeach
        </select>

        <select name="setor">
            <option value="">Selecione o setor</option>
            @foreach($setores as $setor)
            <option value="{{$setor->id}}" {{request("setor") == $setor->id ? "selected" : ""}}>{{$setor->descricao}}</option>
            @endforeach
        </select>

        <button type="submit">Pesquisar</button>
    </p>
</form>

<table border="1">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Data de Nascimento</th>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->nome}}</td>
            <td>{{$usuario->email}}</td>
            <td>{{date_format(date_create($usuario->dataNascimento), "d/m/Y")}}</td>
            <td><a href="{{route('usuario.show', $usuario->id)}}">Detalhes</a></td>
            <td><a href="{{route('usuario.edit', $usuario->id)}}">Editar</a></td>
            <td>
                <form name="form_delete_{{$usuario->id}}" action="{{route('usuario.destroy', $usuario->id)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <a href="#" onclick="confirmDelete('form_delete_{{$usuario->id}}');">Excluir</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@push("script")
<script>
    function confirmDelete(formName) {
        if (confirm("Tem certeza que deseja excluir este registro?"))
            document.forms[formName].submit();
    }
</script>
@endpush

@endsection