@extends("app")

@section("body")

@push("style")
<style>
    .styleUnico{
        font-size: 24px;
    }
</style>
@endpush

<h1>Setor {{$setor->id}}</h1>

<p class="styleUnico"><strong>ID:</strong> {{$setor->id}}</p>
<p class="styleUnico"><strong>Descrição:</strong> {{$setor->descricao}}</p>

@endsection