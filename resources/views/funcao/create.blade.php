@extends("app")

@section("body")

<h1>Cadastro de Função</h1>

<form action="{{route('funcao.store')}}" method="post">
    @csrf
    @include("funcao.form")
</form>

@endsection