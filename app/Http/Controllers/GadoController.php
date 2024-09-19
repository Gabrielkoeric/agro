<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $gados = DB::table('gado')->get();

        return view('gado.index')->with('gados', $gados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gados = DB::table('gado')
                ->where('sexo', 'F')
                ->where('status', 1)
                ->get();
        return view('gado.create')->with('gados', $gados);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $brinco = $request->input('brinco');
        $nome = $request->input('nome');
        $data_nascimento = $request->input('data_nascimento');
        $sexo = $request->input('sexo');
        $mae = $request->input('mae');
        $status = $request->has('ativo') ? 1 : 0;

        $dados = [
            'brinco' => $brinco,
            'gado_nome' => $nome,
            'data_nascimento' => $data_nascimento,
            'sexo' => $sexo,
            'mae' => $mae,
            'status' => $status,
        ];
        $id = DB::table('gado')->insertGetId($dados);

        return redirect('/gado');
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
