<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SafraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $safras = DB::table('safra')->get();

        return view('safra.index')->with('safras', $safras);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('safra.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $safra_nome = $request->input('nome');

        $dados = [
            'safra_nome' => $safra_nome,
        ];

        DB::table('safra')->insertGetId($dados);

        return redirect('/safra')->with('mensagem.sucesso', 'Usuario inserido com sucesso!');
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
    public function edit(Safra $safra)
    {
        return view('safra.edit')->with('Safra', $safra);
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
