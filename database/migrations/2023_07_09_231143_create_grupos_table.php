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
        Schema::create('grupos', function (Blueprint $table) {
            //chave estrangeira//
            $table->id();
            $table->unsignedBigInteger('dancer_id'); 
            $table->string('nome_grupo',50);
            $table->string('local',50);
            $table->timestamps();

            //constraint
            $table->foreign('dancer_id')->references('id')->on('dancers');
            $table->unique('dancer_id');// para relacionamento de 1 x 1
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};
