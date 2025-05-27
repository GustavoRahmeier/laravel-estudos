<?php

namespace App\Http\Controllers;

use App\Models\turno;
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
        //
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
 
        return view('turnos_create');

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
        //
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
