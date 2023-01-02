<?php

namespace App\Http\Controllers;


use App\Models\TBGEDALUNO;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function home() {

   // $alunos = TBGEDALUNO::whereIn('GedAluCod', ['10'])->get();
    
    return view('base.base', [
        // 'alunos' => $alunos
    ]      
    );}

}
