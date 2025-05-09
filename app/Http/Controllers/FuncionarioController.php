<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public readonly Funcionario $funcionario;

    public function __construct()
    {
        $this->funcionario = new Funcionario();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funcionarios = $this->funcionario->all();
        return view('funcionarios', ['funcionarios' => $funcionarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('funcionario_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->funcionario->create([
            'nome' => $request->input('nome'),
            'idade' => $request->input('idade'),
            'genero' => $request->input('genero'),
            'salario' => $request->input('salario')
        ]);

        if ($created) {
            return redirect()->route('funcionarios.index')->with('message', 'Funcionario criado com sucesso');
        } else {
            return redirect()->route('funcionarios.index')->with('message', 'Ocorreu um erro');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Funcionario $funcionario)
    {
        return view('funcionario_show', ['funcionario' => $funcionario]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Funcionario $funcionario)
    {
        return view('funcionario_edit', ['funcionario' => $funcionario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->funcionario->where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
            return redirect()->route('funcionarios.index')->with('message', 'Atualizado com sucesso');
        } else {
            return redirect()->back()->with('message', 'Ocorreu um erro ao atualizar');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->funcionario->where('id', $id)->delete();
        return redirect()->route('funcionarios.index');
    }
}
