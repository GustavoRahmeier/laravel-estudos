<?php

namespace App\Http\Controllers;

use App\Models\Turno;
use Illuminate\Http\Request;

class TurnoController extends Controller
{

    public readonly Turno $turno;

    public function __construct()
    {
        $this->turno = new Turno();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $turnos = $this->turno->all();
        return view('turnos', ['turnos' => $turnos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('turnos_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->turno->create([
            'nome' => $request->input('nome')
        ]);

        if ($created) {
            return redirect()->route('turnos.index')->with('message', 'turno criado com sucesso');
        } else {
            return redirect()->route('turnos.index')->with('message', 'Ocorreu um erro');
        }

        return view('turnos_create');
    }

    /**
     * Display the specified resource.
     */
    public function show(turno $turno)
    {
        return view('turno_show', ['turno' => $turno]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(turno $turno)
    {
        return view('turno_edit', ['turno' => $turno]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->turno->where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
            return redirect()->route('turnos.index')->with('message', 'Atualizado com sucesso');
        } else {
            return redirect()->back()->with('message', 'Ocorreu um erro ao atualizar');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->turno->where('id', $id)->delete();
        return redirect()->route('turnos.index');
    }
}
