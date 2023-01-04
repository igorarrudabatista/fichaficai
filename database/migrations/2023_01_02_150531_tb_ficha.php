<?php

use App\Models\TB_ALUNO;
use App\Models\TB_CATEGORIA;
use App\Models\TB_ESCOLA;
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
        Schema::create('ficha', function (Blueprint $table) {


            $table->increments('id');

        //    $table->foreignId('categoria_id')->constrained('tb_categoria');
     //       $table->foreignId('escola_id')->constrained('tb_escola');
          //  $table->foreignId('categoria_id')->constrained('tb_categoria');
          //  $table->foreignId('FichaCategoriaID')->nullable()->constrained('tb_categoria')->onDelete('set null');


           // $table->foreignId('FichaCategoriaID')->constrained('tb_categoria')->cascadeOnUpdate()->cascadeOnDelete('set null');

            // $table->foreign('FichaCategoriaID')->references('id')->on('tb_categoria');
            // $table->foreign('FichaEscolaID')->references('id')->on('tb_escola');
            // $table->foreign('FichaAlunoID')->references('id')->on('tb_aluno');

     //       $table->foreign('FichaEscolaID')->constrained('tb_escola')->onDelete('cascade');
        //    $table->foreign('FichaAlunoID') ->constrained('tb_aluno')->onDelete('cascade');
            
        // $table->foreignIdFor(TB_CATEGORIA::class);
        // $table->foreignIdFor(TB_ALUNO::class);
        // $table->foreignIdFor(TB_ESCOLA::class);
        
          $table->unsignedInteger('categoria_id');
          $table->foreign('categoria_id')->references('id')->on('categoria');
        
        
          $table->unsignedInteger('escola_id');
          $table->foreign('escola_id')->references('id')->on('escola');
        
        
          $table->unsignedInteger('aluno_id');
          $table->foreign('aluno_id')->references('id')->on('aluno');
        
        $table->string('FichaStatus');




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
        Schema::dropIfExists('ficha');

    }
};
