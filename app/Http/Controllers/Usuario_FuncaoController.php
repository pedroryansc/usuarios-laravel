<?php

namespace App\Http\Controllers;

use App\Models\Usuario_Funcao;
use App\Models\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Usuario_FuncaoController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $usuario_id)
    {
        $usuario_funcao = new Usuario_Funcao();

        $usuario_funcao->usuario_id = $usuario_id;
        $usuario_funcao->funcao_id = $request->input("funcao_id");
        $usuario_funcao->dataInicio = $request->input("dataInicio");

        $usuario_funcao->save();

        return redirect()->route("usuario.edit", $usuario_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $usuario_id, string $funcao_id)
    {
        $usuario_funcao = Usuario_Funcao::where("usuario_id", $usuario_id)->where("funcao_id", $funcao_id);

        $usuario_funcao->delete();

        return redirect()->route("usuario.edit", $usuario_id);
    }
}
