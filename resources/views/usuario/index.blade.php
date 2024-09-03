<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index - Usuários</title>
</head>
<body>
    @include("nav")

    <h1>Usuários</h1>
    
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
                    <td>@php echo date_format(date_create($usuario->dataNascimento), "d/m/Y") @endphp</td>
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
</body>
</html>
<script>
    function confirmDelete(formName){
        if(confirm("Tem certeza que deseja excluir este registro?"))
            document.forms[formName].submit();
    }
</script>