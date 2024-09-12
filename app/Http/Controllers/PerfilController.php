<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use App\Models\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perfis = Perfil::all();

        return view("perfil.index", ["perfis"=>$perfis]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuarios = Usuario::all();

        return view("perfil.create", ["usuarios"=>$usuarios]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $perfil = new Perfil();

        $perfil->usuario_id = $request->input("usuario_id");
        $perfil->descricao = $request->input("descricao");

        $perfil->save();

        return redirect()->route("perfil.index");
    }

    /**
     * Display the specified resource.
     */

    // Ver o que porquê do show, edit, update e destroy não funcionarem passando o perfil como parâmetro

    public function show(string $id)
    {
        $perfil = Perfil::where("usuario_id", $id)->get()->all()[0];

        return view("perfil.show", ["perfil"=>$perfil]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $perfil = Perfil::where("usuario_id", $id)->get()->all()[0];
        $usuarios = Usuario::all();

        return view("perfil.edit", ["perfil"=>$perfil, "usuarios"=>$usuarios]);
    }


    // Estudar para ver como resolver o UPDATE
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $perfil = Perfil::where("usuario_id", $id)->get()->all()[0];

        $perfil->usuario_id = $request->input("usuario_id");
        $perfil->descricao = $request->input("descricao");

        $perfil->save();

        return redirect()->route("perfil.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $perfil = Perfil::where("usuario_id", $id);

        $perfil->delete();

        return redirect()->route("perfil.index");
    }
}
