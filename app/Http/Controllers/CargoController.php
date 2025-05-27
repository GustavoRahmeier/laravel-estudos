<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{

    public readonly Cargo $cargo; 

    public function __construct()
    {
        $this->cargo = new Cargo();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cargos = $this->cargo->all();
        return view('cargos', ['cargos' => $cargos]);        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cargos_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->cargo->create([
            'setor' => $request->input('setor'),
            'nivel' => $request->input('nivel'),
            'salario_min' => $request->input('salario_min'),
            'salario_max' => $request->input('salario_max'),
            'descricao' => $request->input('descricao')
        ]);

        if ($created) {
            return redirect()->route('cargos.index')->with('message', 'cargo criado com sucesso');
        } else {
            return redirect()->route('cargos.index')->with('message', 'Ocorreu um erro');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Cargo $cargo)
    {
        return view('cargo_show', ['cargo' => $cargo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cargo $cargo)
    {
        return view('cargo_edit', ['cargo' => $cargo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->cargo->where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
            return redirect()->route('cargos.index')->with('message', 'Atualizado com sucesso');
        } else {
            return redirect()->back()->with('message', 'Ocorreu um erro ao atualizar');
        }    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->cargo->where('id', $id)->delete();
        return redirect()->route('cargos.index');
    }
}
