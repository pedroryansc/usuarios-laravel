<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index - Setores</title>
</head>
<body>
    @include("nav")

    <h1>Setores</h1>
    
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
</body>
</html>
<script>
    function confirmDelete(formName){
        if(confirm("Tem certeza que deseja excluir este registro?"))
            document.forms[formName].submit();
    }
</script>