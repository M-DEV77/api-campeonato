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
        Schema::create('dancers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('camp_id');
            $table->string('nome_dancer',50);
            $table->string('apelido_dancer',50);
            $table->string('idade_dancer',5);
            $table->string('estilo_dancer',20);
            $table->string('foto_dancer_dancer');
            $table->string('qr_code_dancer');
            $table->timestamps();
            //constraint
            $table->foreign('camp_id')->references('id')->on('users');
            $table->unique('camp_id');// para relacionamento de 1 x 1
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Schema::create('dancers', function (Blueprint $table) {
            //$table->dropColumn(['nome','apelido']);
        //});
        Schema::dropIfExists('dancers');
        
    }
};
