@extends("app")

@section("body")

<h1>Cadastro de Usuário</h1>

<form action="{{route('usuario.store')}}" method="post">
    @csrf
    @include("usuario.form")
</form>

@endsection