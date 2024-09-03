<?php

namespace App\Http\Controllers;

use App\Models\Setor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SetorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $setores = Setor::where("descricao", "like", "%".$request->input("pesquisa")."%")->get();

        return view("setor.index", ["setores"=>$setores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("setor.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $setor = new Setor();

            $setor->descricao = $request->input("descricao");

            $setor->save();

            return redirect()->route("setor.index");
        } catch(\Exception $e){

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Setor $setor)
    {
        return view("setor.show", ["setor"=>$setor]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setor $setor)
    {
        return view("setor.edit", ["setor"=>$setor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setor $setor)
    {
        $setor->descricao = $request->input("descricao");

        $setor->save();

        return redirect()->route("setor.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setor $setor)
    {
        $setor->delete();

        return redirect()->route("setor.index");
    }
}
