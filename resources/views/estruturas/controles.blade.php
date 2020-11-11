@extends('app')

@section('content')

    @if ($variavel === '123')
        if - É igual
    @endif

    <br><br>

    {{-- unless funciona de forma contrário do if --}}
    @unless ($variavel === '123')
        unless - É diferente
    @else
        unless - É igual
    @endunless

    <br><br>

    {{-- isset verifica se a variavel existe --}}
    @isset ($variavel)
        isset - existe
    @endisset

    {{-- empty verifica se a variavel está vazia --}}
    @empty ($variavel)
        empty - vazio
    @endempty

    <br><br>

    {{-- auth verifica se esta autenticado --}}
    @auth
        auth - logado
    @else
        auth - deslogado
    @endauth

    <br><br>

    {{--  guest verifica se não esta logado --}}
    @guest
        guest - deslogado
    @endguest

    <br><br>

    {{-- switch faz varias verificacões --}}
    @switch($variavel)
        @case(1)
                switch - é 1
            @break
        @case(2)
                switch - é 2
            @break
        @default
            switch - default
    @endswitch


@endsection
