@extends("app")

@section("body")

<h1>Edição de Usuário</h1>

<form action="{{route('usuario.update', $usuario->id)}}" method="post">
    @csrf
    @method("PUT")

    @include("usuario.form")
</form>
<br>
<br>
<form action="{{route('store', $usuario->id)}}" method="post">
    @csrf
    Função:
    <select name="funcao_id">
        <option value="">Escolha a função</option>
        @foreach($funcoes as $funcao)
        <option value="{{$funcao->id}}">{{$funcao->descricao}}</option>
        @endforeach
    </select>
    <br><br>
    Data de Início: <input type="datetime-local" name="dataInicio"><br>
    <br>
    <button type="submit">Adicionar</button>
</form>
<br>
<table border="1">
    <thead>
        <th>ID</th>
        <th>Função</th>
        <th>Data de Início</th>
    </thead>
    <tbody>
        @foreach($usuario->funcoes as $funcao)
        <tr>
            <td>{{$funcao->id}}</td>
            <td>{{$funcao->descricao}}</td>
            <td>
                @if(isset($funcao->pivot->dataInicio))
                {{date_format(date_create($funcao->pivot->dataInicio), "d/m/Y")}}
                @endif
            </td>
            <td>
                <form name="form_delete_{{$funcao->id}}" action="{{route('destroy', [$usuario->id, $funcao->id])}}" method="post">
                    @csrf
                    @method("DELETE")
                    <a href="#" onclick="confirmDelete('form_delete_{{$funcao->id}}');">Remover</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@push("script")
<script>
    function confirmDelete(formName) {
        if (confirm("Tem certeza que deseja remover esta função?"))
            document.forms[formName].submit();
    }
</script>
@endpush

@endsection