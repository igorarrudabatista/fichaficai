<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_ESCOLA extends Model


{
    use HasFactory;
    protected $table = 'TB_ESCOLA';

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
