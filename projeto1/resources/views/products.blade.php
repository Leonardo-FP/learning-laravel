@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

        <h1>Esta é a página de produtos</h1>
        <a href="/">Voltar para a Home</a>

        @if($busca != '')
                <p>O usuário está buscando por: {{ $busca }}</p>
        @endif
@endsection