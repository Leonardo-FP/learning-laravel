@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

        <h1>Algum título</h1>
        <img src="/img/banner.jpg" alt="Imagem da plateia">
        @if(10 > 11)
            <p>A condição é true</p>
        @else
            <p>A condição é falsa</p>
        @endif

        @if($nome == "Leonardo")
            <p>O nome do futuro programador em Laravel é {{ $nome }}, e ele tem {{ $idade }} anos de idade! Além disso, trabalha como {{ $profissao }}</p>
        @endif

        @for($i = 0; $i < count($array); $i++)
            <p>Índice: {{ $i }} - Valor {{ $array[$i] }}</p>
            @if($i == 2)
                <p>(Esse é o índice {{ $i }} !!)</p>
            @endif
        @endfor

        @foreach($nomes as $nome)
            <p>{{ $loop->index }}</p>
            <p>{{ $nome }}</p>
        @endforeach

        @php 
            $name = "Leonardo";
            echo $name;
        @endphp

        <!-- Fazendo comentário com o Blade -->
        {{-- Esté é um comentário no Blade --}}

@endsection