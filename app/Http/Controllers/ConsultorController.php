<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CaoUsuario;

class ConsultorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultores = CaoUsuario::join('permissao_sistema', 'cao_usuario.co_usuario', '=', 'permissao.co_usuario');

        $consultores = CaoUsuario::join('permissao_sistema', 'cao_usuario.co_usuario', '=', 'permissao_sistema.co_usuario')
            ->where('permissao_sistema.co_sistema', '1')->where('permissao_sistema.in_ativo', 'S')
            ->where('permissao_sistema.co_tipo_usuario', '[0,1,2]')->get();

            
        return view('consultores/consultores', compact('consultores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    public function desempenho()
    {
    }
}
