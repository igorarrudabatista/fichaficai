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
        Schema::create('pivo', function (Blueprint $table) {

       // $table->foreign('orcamento_id')->references('id')->on('orcamentos');
       // $table->foreign('produto_id'  )->references('id')->on('produtos');
        $table->integer('Quantidade');


          $table->unsignedInteger('categoria_id');
          $table->foreign('categoria_id')->references('id')->on('categoria');

          $table->unsignedInteger('escola_id');
          $table->foreign('escola_id')->references('id')->on('escola');
         
          $table->unsignedInteger('aluno_id');
          $table->foreign('aluno_id')->references('id')->on('aluno');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivo');

    }
};
