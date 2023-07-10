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
        Schema::create('jurados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jurado_id');
            $table->string('nome',50);
            $table->string('apelido',50);
            $table->string('idade',5);
            $table->string('estilo',20);
            $table->string('foto_dancer');
            $table->string('qr_code');
            $table->timestamps();
            //constraint
            $table->foreign('jurado_id')->references('id')->on('users');
            $table->unique('jurado_id');// para relacionamento de 1 x 1
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jurados');
    }
};
