@extends("app")

@section("body")

<h1>Edição de Função</h1>

<form action="{{route('funcao.update', $funcao->id)}}" method="post">
    @csrf
    @method("PUT")
    
    @include("funcao.form")
</form>

@endsection