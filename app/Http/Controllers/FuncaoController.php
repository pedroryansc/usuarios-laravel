<?php

namespace App\Http\Controllers;

use App\Models\Funcao;
use Illuminate\Http\Request;

class FuncaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funcoes = Funcao::all();

        return view("funcao.index", ["funcoes"=>$funcoes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("funcao.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $funcao = new Funcao();

        $funcao->descricao = $request->input("descricao");

        $funcao->save();

        return redirect()->route("funcao.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Funcao $funcao)
    {
        return view("funcao.show", ["funcao"=>$funcao]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Funcao $funcao)
    {
        return view("funcao.edit", ["funcao"=>$funcao]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Funcao $funcao)
    {
        $funcao->descricao = $request->input("descricao");

        $funcao->save();

        return redirect()->route("funcao.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Funcao $funcao)
    {
        $funcao->delete();

        return redirect()->route("funcao.index");
    }
}
