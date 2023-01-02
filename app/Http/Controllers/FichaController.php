<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TB_FICHA;
use App\Models\TB_CATEGORIA;
use App\Models\TB_ESCOLA;
use App\Models\TB_ALUNO;


class FichaController extends Controller
{
    public function home() {

          
        
     $ficha = TB_FICHA::with('tb_categoria', 'tb_escola')->get();

 //    $ficha = TB_FICHA::all();
      $ficha_categoria = TB_CATEGORIA::all();
      $ficha_escola = TB_ESCOLA::all();
      $ficha_aluno = TB_ALUNO::all();
       // $ficha = Produto::paginate(10);

         $search = request('search');

         if($search) {
             $ficha = TB_FICHA::where ([['FicaiId', 'like', '%'.$search. '%' ]])->get();

              } else {
                 $ficha = TB_FICHA::all();
             }
        

       // return view('ficha.table');
        return view('ficha.table', ['ficha'=> $ficha, 
        'ficha_categoria' => $ficha_categoria, 
        'ficha_escola' => $ficha_escola,
        'ficha_aluno' => $ficha_aluno,
        'search' => $search]);


        // return view('ficha.table'    
  
}

public function create() {

    return view('ficha.form'   

);

    }


    public function store (Request $request) {
        
        
        $nova_Ficha =  new Nova_Ficha;
        
        $nova_Ficha -> Nome_Produto       = $request->Nome_Produto;
        $nova_Ficha -> Categoria_Produto  = $request->Categoria_Produto;
        $nova_Ficha -> Status_Produto     = $request->Status_Produto;
        $nova_Ficha -> Preco_Produto      = $request->Preco_Produto;
        $nova_Ficha -> Estoque_Produto    = $request->Estoque_Produto;
        $nova_Ficha -> Quantidade_Produto = $request->Quantidade_Produto;
        
        
        // Imagem do produto upload
      
        
        $nova_Ficha ->save();
        
        $criar_produto = Produto::all();
        
        toast('Produto criado com sucesso!','success');

       return redirect('/produtos/produtos');

         

    }
    
}
