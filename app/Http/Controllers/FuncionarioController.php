<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Models\Cargo;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public readonly Funcionario $funcionario;
    public readonly Cargo $cargo;

    public function __construct()
    {
        $this->funcionario = new Funcionario();
        $this->cargo = new Cargo();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funcionarios = $this->funcionario->with('cargo')->orderBy('nome')->get();
        return view('funcionarios', ['funcionarios' => $funcionarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $cargos = $this->cargo->all();

        return view('funcionario_create', compact('cargos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     .. campos
        //     ]);
          
        //   if($validated) {
        //     $created = $this->funcionario->create($validated);
        //   }

        $created = $this->funcionario->create([
            'nome' => $request->input('nome'),
            'idade' => $request->input('idade'),
            'genero' => $request->input('genero'),
            'salario' => $request->input('salario'),
            'id_cargo' => $request->input('id_cargo')
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
        $cargos = $this->cargo->all();

        return view('funcionario_edit', ['funcionario' => $funcionario], compact('cargos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'id_cargo' => 'required|exists:cargos,id',
            
        ]);

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
