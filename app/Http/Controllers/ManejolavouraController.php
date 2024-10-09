<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ManejolavouraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $manejos_lavouras = DB::table('manejo_lavoura')->get();

        return view('manejo_lavoura.index')->with('manejos_lavouras', $manejos_lavouras);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuarios = DB::table('usuarios')->get();
        return view('manejo_lavoura.create')->with('usuarios', $usuarios);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ini = $request->input('ini');
    $fim = $request->input('fim');
    $descricao = $request->input('descricao');
    $usuario = $request->input('usuario');

    // Calcula a diferença entre as datas se 'fim' não for nulo
    $horas_totais = null;
    if ($fim) {
        $inicio = Carbon::parse($ini);
        $final = Carbon::parse($fim);
        $diff = $inicio->diff($final);
        $horas_totais = sprintf('%dH : %dMin', $diff->h, $diff->i);
    }

        $dados = [
            'data_hora_ini' => $ini,
            'data_hora_fim' => $fim,
            'horas_totais' => $horas_totais,
            'descricao' => $descricao,
            'id' => $usuario,
        ];
        $id = DB::table('manejo_lavoura')->insertGetId($dados);

        return redirect('/manejo_lavoura');
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
