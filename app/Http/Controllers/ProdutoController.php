<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public readonly Produto $produto;

    public function __construct()
    {
        $this->produto = new Produto();
    }

    /**
     * Display a listing of the resource.
     */
    public function index() //Responsável por exibir a lista de todos produtos
    {
        $produtos = $this->produto->all();
        return view('produtos', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //retorna a view de criação do produto
    {
        return view('produto_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //salva o novo produto no bd.
    {
        $created = $this->produto->create([
            'descricao' => $request->input('descricao'),
            'preco' => $request->input('preco'),
            'quantidade' => $request->input('quantidade'),
        ]);

        if ($created) {
            return redirect()->route('produtos.index')->with('message', 'Criado com sucesso');
        } else {
            return redirect()->route('produtos.index')->with('message', 'Ocorreu um erro');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto) //mostra produto específico
    {
        return view('produto_show', ['produto' => $produto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        return view('produto_edit', ['produto' => $produto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // $produto = $this->produto->find($id);
        // $produto->descricao = $request->input('descricao');
        // $produto->quantidade = $request->input('quantidade');
        // $produto->preco = $request->input('preco');
        // $produto->save();

        // return redirect()->route('produtos.index');

        $updated = $this->produto->where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
            return redirect()->route('produtos.index')->with('message', 'Atualizado com sucesso');
        } else {
            return redirect()->back()->with('message', 'Ocorreu um erro ao atualizar');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->produto->where('id', $id)->delete();
        return redirect()->route('produtos.index');
    }
}
