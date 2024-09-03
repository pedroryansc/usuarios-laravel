<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ["nome", "email", "senha", "dataNascimento", "setor_id"];

    public function setor(){
        return $this->belongsTo("App\Models\Setor");
    }

    public function perfil(){
        return $this->hasOne("App\Models\Perfil");
    }
}
