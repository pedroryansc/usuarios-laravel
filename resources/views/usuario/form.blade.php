@csrf
Nome: <input type="text" name="nome" value="@if(isset($usuario->nome)){{$usuario->nome}}@endif"><br>
<br>
E-mail: <input type="text" name="email" value="@if(isset($usuario->email)){{$usuario->email}}@endif"><br>
<br>
Senha: <input type="text" name="senha" value="@if(isset($usuario->senha)){{$usuario->senha}}@endif"><br>
<br>
Data de Nascimento: <input type="date" name="dataNascimento" value="@if(isset($usuario->dataNascimento)){{$usuario->dataNascimento}}@endif"><br>
<br>
Setor: 
<select name="setor_id">
    @foreach($setores as $setor)
        <option value="{{$setor->id}}" @if(isset($usuario->setor_id) && $setor->id == $usuario->setor_id) selected @endif>
            {{$setor->descricao}}
        </option>
    @endforeach
</select>
<br><br>
<button type="submit">@if(isset($usuario->id)) Atualizar @else Salvar @endif</button>