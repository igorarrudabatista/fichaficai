<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_ALUNO extends Model


{
    use HasFactory;
    protected $table = 'TB_ALUNO';

    // protected $fillable = [
    //     'FichaStatus',
    //     'FichaCategoriaID',
    //     'FichaEscolaID',
    //     'FichaAlunoID',
        
    // ];

    public function TB_FICHA() {
        return $this->belongsTo(TB_FICHA::class);
        }      
     
}
