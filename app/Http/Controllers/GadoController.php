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
    public function edit($id)
    {
        /*
        $perfis = DB::table('perfil')
            ->select('id_perfil', 'nome')
            ->get();

        $perfilAtual = DB::table('usuarios as u')
            ->select('p.nome as nome_perfil', 'p.id_perfil as id_perfil')
            ->leftJoin('usuario_perfil as up', 'u.id', '=', 'up.id')
            ->leftJoin('perfil as p', 'up.id_perfil', '=', 'p.id_perfil')
            ->where('u.id', '=', $usuario->id)
            ->first();
        */
        $gados = DB::table('gado')
                ->where('sexo', 'F')
                ->where('status', 1)
                ->get();

        $gado = DB::table('gado')->where('id_gado', $id)->first();

        //dd($gado);

        return view('gado.edit')->with('gado', $gado)->with('gados', $gados)/*->with('perfilAtual', $perfilAtual)*/;
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
