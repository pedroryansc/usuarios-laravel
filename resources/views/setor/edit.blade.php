@extends("app")

@section("body")

<h1>Edição de Setor</h1>

<form action="{{route('setor.update', $setor->id)}}" method="post">
    @csrf
    @method("PUT")

    @include("setor.form")
</form>

@endsection