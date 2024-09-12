<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario_Funcao extends Model
{
    use HasFactory;

    protected $fillable = ["usuario_id", "funcao_id", "dataInicio"];
}
