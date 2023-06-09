<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoDespesa;

class TiposDespesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tiposDespesa = TipoDespesa::orderBy('descricao', 'asc')->get();

        return view('tipos-despesa/index', [
            'tiposDespesa' => $tiposDespesa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipos-despesa/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tipoDespesa = new TipoDespesa;
        $tipoDespesa->descricao = $request->descricao;
        $tipoDespesa->save();

        return redirect('tipos-despesa');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tipoDespesa = TipoDespesa::findOrFail($id);
        return view('tipos-despesa/show', [
            'tipoDespesa' => $tipoDespesa
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tipoDespesa = TipoDespesa::findOrFail($id);
        return view('tipos-despesa/edit', [
            'tipoDespesa' => $tipoDespesa
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tipoDespesa = TipoDespesa::findOrFail($id);
        $tipoDespesa->descricao = $request->descricao;
        $tipoDespesa->save();

        return redirect('tipos-despesa');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TipoDespesa::findOrFail($id)->delete();
 
        return redirect('tipos-despesa');
    }
}
