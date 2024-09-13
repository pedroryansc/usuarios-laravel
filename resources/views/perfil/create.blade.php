@extends("app")

@section("body")

<h1>Cadastro de Perfil</h1>

<form action="{{route('perfil.store')}}" method="post">
    @csrf
    @include("perfil.form")
</form>

@endsection