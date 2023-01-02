<?php

namespace App\Http\Controllers;

use App\Models\TBGERPESSOA;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    public function create() {

    return view('alunos.form_alunos'    
    );}



    public function home() {

        $search = request('search');

        if ($search) {
            $aluno = TBGERPESSOA::where([['GerPesNom',   'like', '%' . $search . '%']])->get()->limit(10);
        } else {
            $aluno = TBGERPESSOA::all();
        }
            return view('alunos.alunos', ['aluno'=> $aluno,  'search' => $search]);

    }
}
