Descrição: <input type="text" name="descricao" value="@if(isset($funcao->descricao)){{$funcao->descricao}}@endif"><br>
<br>
<button type="submit">@if(isset($funcao->id)) Atualizar @else Salvar @endif</button>