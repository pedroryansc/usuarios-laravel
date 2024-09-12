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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string("nome", 45);
            $table->string("email", 45)->unique();
            $table->string("senha", 45);
            $table->date("dataNascimento");
            $table->unsignedBigInteger("setor_id");
            $table->timestamps();
            $table->foreign("setor_id")->references("id")->on("setors")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
