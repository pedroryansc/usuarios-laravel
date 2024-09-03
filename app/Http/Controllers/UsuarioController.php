<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Setor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();

        return view("usuario.index", ["usuarios"=>$usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $setores = Setor::all();

        return view("usuario.create", ["setores"=>$setores]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();

        $usuario->nome = $request->input("nome");
        $usuario->email = $request->input("email");
        $usuario->senha = $request->input("senha");
        $usuario->dataNascimento = $request->input("dataNascimento");
        $usuario->setor_id = $request->input("setor_id");

        $usuario->save();

        return redirect()->route("usuario.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        return view("usuario.show", ["usuario"=>$usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        $setores = Setor::all();

        return view("usuario.edit", ["usuario"=>$usuario, "setores"=>$setores]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        $usuario->nome = $request->input("nome");
        $usuario->email = $request->input("email");
        $usuario->senha = $request->input("senha");
        $usuario->dataNascimento = $request->input("dataNascimento");
        $usuario->setor_id = $request->input("setor_id");

        $usuario->save();

        return redirect()->route("usuario.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return redirect()->route("usuario.index");
    }
}
