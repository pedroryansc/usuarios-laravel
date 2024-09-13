@extends("app")

@section("body")

<h1>Edição de Perfil</h1>

<form action="{{route('perfil.update', $perfil->usuario_id)}}" method="post">
    @csrf
    @method("PUT")
    
    @include("perfil.form")
</form>

@endsection("body")