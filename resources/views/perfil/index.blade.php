<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index - Perfis</title>
</head>
<body>
    @include("nav")

    <h1>Perfis</h1>
    
    <table border="1">
        <thead>
            <th>ID do Usuário</th>
            <th>Descrição</th>
        </thead>
        <tbody>
            @foreach($perfis as $perfil)
                <tr>
                    <td>{{$perfil->usuario_id}}</td>
                    <td>{{$perfil->descricao}}</td>
                    <td><a href="{{route('perfil.show', $perfil->usuario_id)}}">Detalhes</a></td>
                    <td><a href="{{route('perfil.edit', $perfil->usuario_id)}}">Editar</a></td>
                    <td>
                        <form name="form_delete_{{$perfil->usuario_id}}" action="{{route('perfil.destroy', $perfil->usuario_id)}}" method="post">
                            @csrf
                            @method("DELETE")
                            <a href="#" onclick="confirmDelete('form_delete_{{$perfil->usuario_id}}');">Excluir</a>
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