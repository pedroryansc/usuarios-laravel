@csrf
Descrição: <input type="text" name="descricao" value="@if(isset($setor->descricao)){{$setor->descricao}}@endif"><br>
<br>
<button type="submit">@if(isset($setor->id)) Atualizar @else Salvar @endif</button>