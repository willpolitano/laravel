<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        //recebe somente os valores
        //dd($request->only(['nome', 'descricao']));

        //não recebe somente os valores
        //dd($request->except(['nome', 'descricao']));

        if ($request->file('foto')->isValid()) {
            //download do arquivo no diretorio storage/app/produtos/
            $request->file('foto')->store('produtos');
        }


    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
