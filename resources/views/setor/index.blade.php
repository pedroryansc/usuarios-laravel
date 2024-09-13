@extends("app")

@section("body")

<h1>Setores</h1>

<form action="{{route('setor.index')}}" method="post">
    @csrf
    @method("GET")
    <p>
        <input type="search" name="pesquisa" placeholder="Pesquisar pela descrição do setor" size="30"
            value="{{request('pesquisa')}}">
        <button type="submit">Pesquisar</button>
    </p>
</form>
<table border="1">
    <thead>
        <th>ID</th>
        <th>Descrição</th>
    </thead>
    <tbody>
        @foreach($setores as $setor)
        <tr>
            <td>{{$setor->id}}</td>
            <td>{{$setor->descricao}}</td>
            <td><a href="{{route('setor.show', $setor->id)}}">Detalhes</a></td>
            <td><a href="{{route('setor.edit', $setor->id)}}">Editar</a></td>
            <td>
                <form name="form_delete_{{$setor->id}}" action="{{route('setor.destroy', $setor->id)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <a href="#" onclick="confirmDelete('form_delete_{{$setor->id}}');">Excluir</a>
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