<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FICHA;
use App\Models\CATEGORIA;
use App\Models\ESCOLA;
use App\Models\ALUNO;


class FichaController extends Controller
{
    public function home() {

          
        
 //    $ficha = FICHA::with('Categoria')->get();

      $ficha     = FICHA::all();
      $categoria = CATEGORIA::all();
      $escola    = ESCOLA::all();
      $aluno     = ALUNO::all();
       // $ficha = Produto::paginate(10);

        

       // return view('ficha.table');
        return view('ficha.table', [
        'ficha'=> $ficha, 
        'categoria' => $categoria, 
        'escola' => $escola,
        'aluno' => $aluno,
        
        ]);


        // return view('ficha.table'    
  
}

public function update(Request $request, $id)
{


$ficha = FICHA::find($id);

// $FICHA = FICHA::create($request->all());
    
 FICHA::findOrFail($request->id)->update($request->all());
   
   // Orcamento::findOrFail($request->id) -> update();
   
   $ficha->save();

   

    
//  toast('Orçamento editado com sucesso!','success');

    return redirect('/ficha/table');
}


public function Conselho1(Request $request, $id)    {

    $ficha = FICHA::find($id);
    $conselho1 = 'Conselho1';
    $ficha -> FichaStatus   = $conselho1;
    $ficha -> save();
         
    //   toast('Status do Orçamento alterado para <b> Venda Realizada! </b> ','success');

      return redirect('/ficha/table');
  }
public function Conselho2(Request $request, $id)    {

    $ficha = FICHA::find($id);
    $conselho2 = 'Conselho2';
    $ficha -> FichaStatus   = $conselho2;
    $ficha -> save();
         
    //   toast('Status do Orçamento alterado para <b> Venda Realizada! </b> ','success');

      return redirect('/ficha/table');
  }
public function Conselho3(Request $request, $id)    {

    $ficha = FICHA::find($id);
    $conselho3 = 'Conselho3';
    $ficha -> FichaStatus   = $conselho3;
    $ficha -> save();
         
    //   toast('Status do Orçamento alterado para <b> Venda Realizada! </b> ','success');

      return redirect('/ficha/table');
  }


// public function create() {

//     return view('ficha.form'   

// );

//     }


//     public function store (Request $request) {
        
        
//         $nova_Ficha =  new Nova_Ficha;
        
//         $nova_Ficha -> Nome_Produto       = $request->Nome_Produto;
//         $nova_Ficha -> Categoria_Produto  = $request->Categoria_Produto;
//         $nova_Ficha -> Status_Produto     = $request->Status_Produto;
//         $nova_Ficha -> Preco_Produto      = $request->Preco_Produto;
//         $nova_Ficha -> Estoque_Produto    = $request->Estoque_Produto;
//         $nova_Ficha -> Quantidade_Produto = $request->Quantidade_Produto;
        
        
//         // Imagem do produto upload
      
        
//         $nova_Ficha ->save();
        
//         $criar_produto = Produto::all();
        
//         toast('Produto criado com sucesso!','success');

//        return redirect('/produtos/produtos');

         

//     }
    
}
