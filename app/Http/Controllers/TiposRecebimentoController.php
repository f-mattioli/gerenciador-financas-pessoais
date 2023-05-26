<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoRecebimento;

class TiposRecebimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tiposRecebimento = TipoRecebimento::orderBy('descricao', 'asc')->get();

        return view('tipos-recebimento/index', [
            'tiposRecebimento' => $tiposRecebimento
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tipos-recebimento/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tipoRecebimento = new TipoRecebimento;
        $tipoRecebimento->descricao = $request->descricao;
        $tipoRecebimento->save();

        return redirect('tipos-recebimento');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tipoRecebimento = TipoRecebimento::findOrFail($id);
        return view('tipos-recebimento/show', [
            'tipoRecebimento' => $tipoRecebimento
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TipoRecebimento::findOrFail($id)->delete();

        return redirect('tipos-recebimento');
    }
}
