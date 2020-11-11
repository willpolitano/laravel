<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateProductRequest;

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

    public function store(StoreUpdateProductRequest $request)
    {
        /*
        $request->validate([
            'nome' => 'required|min:3|max:25',
            'descricao' => 'nullable|min:3|max:10000',
            'foto' => 'required|image'
        ]);
        */

        dd('OK');

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
