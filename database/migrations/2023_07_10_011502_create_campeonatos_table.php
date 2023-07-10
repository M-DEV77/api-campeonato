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
        Schema::create('campeonatos', function (Blueprint $table){

            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->string('nome_campeonato',50);
            $table->string('img_capa');
            $table->integer('tipo'); //aqui sera definido se é 1x1 2x2
            $table->integer('tipo_chave'); //aqui sera definido o tipo de chave se é 8,16,32,64
            $table->integer('dancers_quant');//aqui sera somado multiplicado a tabela tipo pela tabela chave
            $table->integer('jurado_quant');
            $table->integer('entrada_quant');
            $table->float('tempo_entrada');
            $table->float('valor',8,2);// valor da inscrição 
            $table->float('total_valor',8,2); //aqui multiplica valor da inscrição pelo total de dancer
            $table->timestamps();
            //constraint
            $table->foreign('users_id')->references('id')->on('users');
            $table->unique('users_id');// para relacionamento de 1 x 1

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campeonatos');
    }
};
