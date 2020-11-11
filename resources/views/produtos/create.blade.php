@extends('app')

@section('content')

    <h1>Cadastrar produtos</h1>

    <form action=" {{ route('produtos.store') }} " method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="descricao" placeholder="Descrição">
        <input type="file" name="foto">
        <button type="submit">Enviar</button>
    </form>

@endsection
