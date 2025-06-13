<?php

namespace App\Http\Controllers;

use App\Models\Turno;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioTurnoController extends Controller
{

    public readonly Turno $turno;
    public readonly Funcionario $funcionario;

    public function __construct()
    {
        $this->turno = new Turno();
        $this->funcionario = new Funcionario();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $funcionarios = $this->funcionario->all();
        $turnos = $this->turno->all();
        return view('funcionario_turno_create', compact('funcionarios', 'turnos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $funcionarioId = $request->input('funcionario_id');
        $turnos = $request->input('turnos', []);

        $funcionario = $this->funcionario->find($funcionarioId);
        $funcionario->turnos()->sync($turnos);

        return redirect()->route('funcionarios.index')->with('message', 'Turnos atribuidos ao funcionario');

    }

    /**
     * Display the specified resource.
     */
    public function show(turno $turno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(turno $turno)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, turno $turno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(turno $turno)
    {
        //
    }
}
