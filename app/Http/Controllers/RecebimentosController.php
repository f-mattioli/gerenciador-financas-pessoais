<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recebimentos;
use App\Models\TipoRecebimento;

class RecebimentosController extends Controller
{


    public function index()
    {
        $recebimentos = Recebimentos::orderBy('data_vencimento', 'asc')->get();

        return view('recebimentos/index', [
            'recebimentos' => $recebimentos
        ]);
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $TipoRecebimento = TipoRecebimento::orderBy('descricao', 'asc')->get();

        return view('recebimentos/create', [
            'tiposRecebimento' => $TipoRecebimento
        ]);
    }

    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $request->validate([
            'valor' => 'required|numeric',
            'descricao' => 'required|string',
        ]);

        // Redirecionamento após a criação do recebimento
        return redirect()->route('recebimentos.create')->with('success', 'Recebimento criado com sucesso!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }
}
