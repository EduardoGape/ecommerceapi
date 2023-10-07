<?php

namespace App\Http\Controllers;

use App\Models\transacao;
use Illuminate\Http\Request;
use Termwind\Components\Li;

class transacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return transacao::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(transacao::create($request ->all())){
            return response()-> json([
                'message'=> 'transacao cadastrada com sucesso'
            ], 201);
        }
        return response()->json([
            'message' => 'Erro ao cadastrar a transacao'
        ], 404);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
