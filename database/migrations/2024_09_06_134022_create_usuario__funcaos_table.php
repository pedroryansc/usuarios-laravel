<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuario__funcaos', function (Blueprint $table) {
            $table->unsignedBigInteger("usuario_id");
            $table->unsignedBigInteger("funcao_id");
            $table->primary(["usuario_id", "funcao_id"]);
            $table->foreign("usuario_id")->references("id")->on("usuarios")->onDelete("cascade");
            $table->foreign("funcao_id")->references("id")->on("funcaos")->onDelete("cascade");
            $table->dateTime("dataInicio")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario__funcaos');
    }
};
