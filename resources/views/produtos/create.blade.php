@extends('app')

@section('content')

    <h1>Cadastrar produtos</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action=" {{ route('produtos.store') }} " method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="nome" placeholder="Nome" value="{{ old('nome') }}">
        <input type="text" name="descricao" placeholder="Descrição" value="{{ old('descricao') }}">
        <input type="file" name="foto">
        <button type="submit">Enviar</button>
    </form>

@endsection
