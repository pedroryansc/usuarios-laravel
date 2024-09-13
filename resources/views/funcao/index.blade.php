@extends("app")

@section("body")

<h1>Funções</h1>

<table border="1">
    <thead>
        <th>ID</th>
        <th>Descrição</th>
    </thead>
    <tbody>
        @foreach($funcoes as $funcao)
        <tr>
            <td>{{$funcao->id}}</td>
            <td>{{$funcao->descricao}}</td>
            <td><a href="{{route('funcao.show', $funcao->id)}}">Detalhes</a></td>
            <td><a href="{{route('funcao.edit', $funcao->id)}}">Editar</a></td>
            <td>
                <form name="form_delete_{{$funcao->id}}" action="{{route('funcao.destroy', $funcao->id)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <a href="#" onclick="confirmDelete('form_delete_{{$funcao->id}}');">Excluir</a>
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