<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultadoslavourasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $gastos = DB::table('resultados_lavouras')->get();

        $saldo = $gastos->sum('valor_total');

        return view('resultados_lavouras.index')->with('gastos', $gastos)->with('saldo', $saldo);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('resultados_lavouras.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Obtém os dados do formulário
    $descricao = $request->input('descricao');
    $valor_unitario = $request->input('uni');
    $quantidade = $request->input('quant');
    $tipo_operacao = $request->input('tipo_operacao'); // 1 para venda, 0 para compra
    $fornecedor = "gabriel"; // Adicionada a ponto e vírgula aqui

    // Calcula o valor total
    $valor_total = $valor_unitario * $quantidade;

    // Se for uma compra, torna o valor total negativo
    if (!$tipo_operacao) {
        $valor_total *= -1; // Torna negativo se for compra
    }

    // Dados a serem inseridos no banco
    $dados = [
        'descricao' => $descricao,
        'valor_unitario' => $valor_unitario,
        'quantidade' => $quantidade,
        'valor_total' => $valor_total,
        'fornecedor' => $fornecedor,
    ];

    // Insere os dados na tabela resultados_lavouras e obtém o ID
    $id = DB::table('resultados_lavouras')->insertGetId($dados);

    // Redireciona após a inserção
    return redirect('/resultados_lavouras')->with('success', 'Registro criado com sucesso!');
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
