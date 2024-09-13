@extends("app")

@section("body")

<h1>Função {{$funcao->id}}</h1>
    
<p><strong>ID:</strong> {{$funcao->id}}</p>
<p><strong>Descrição:</strong> {{$funcao->descricao}}</p>

@endsection