<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ficha', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('FichaStatus');
     


            $table->unsignedInteger('FichaCategoriaID');
            $table->foreign('FichaCategoriaID')->references('id')->on('tb_categoria');


            $table->unsignedInteger('FichaEscolaID');
            $table->foreign('FichaEscolaID')->references('id')->on('tb_escola');


            $table->unsignedInteger('FichaAlunoID');
            $table->foreign('FichaAlunoID')->references('id')->on('tb_aluno');


            // $table->unsignedInteger('produto_id');
            // $table->foreign('produto_id')->references('id')->on('produtos');


            // $table->foreignId('FichaCategoriaID')->constrained('tb_categoria')->onDelete('cascade');
            // $table->foreignId('FichaEscolaID')->constrained('tb_escola')->onDelete('cascade');
            // $table->foreignId('FichaAlunoID')->constrained('tb_aluno')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      //  Schema::dropIfExists('tb_ficha');

    }
};
