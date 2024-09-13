@extends("app")

@section("body")

<h1>Cadastro de Setor</h1>

<form action="{{route('setor.store')}}" method="post">
    @csrf
    @include("setor.form")
</form>

@endsection