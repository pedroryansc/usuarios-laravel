Usuário: 
<select name="usuario_id">
    @foreach($usuarios as $usuario)
        <option value="{{$usuario->id}}" @if(isset($perfil->usuario_id) && $usuario->id == $perfil->usuario_id) selected @endif>
            {{$usuario->email}}
        </option>
    @endforeach
</select>
<br><br>
Descrição: <input type="text" name="descricao" value="@if(isset($perfil->descricao)){{$perfil->descricao}}@endif"><br>
<br>
<button type="submit">@if(isset($perfil->usuario_id)) Atualizar @else Salvar @endif</button>