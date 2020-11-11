@extends('app')

@section('content')

    {{-- lista o array --}}
    <h3>Foreach</h3>
    @foreach ($devs as $dev)
        <p class="@if ($loop->last) last @endif" >{{ $dev }}</p>
    @endforeach

    <hr><br><br>

    {{-- forelse verifica se o array está vazio só depois fazer a listagem --}}
    <h3>Forelse</h3>
    @forelse ($devss as $dev)
        <p>{{ $dev }}</p>
    @empty
        <p>Array vazio</p>
    @endforelse

    <style>
        .last {
            background: #CCC;
        }
    </style>

@endsection
