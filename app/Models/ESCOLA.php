<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ESCOLA extends Model


{
    use HasFactory;
    protected $table = "escola";

    // protected $fillable = [
    //     'FichaStatus',
    //     'FichaCategoriaID',
    //     'FichaEscolaID',
    //     'FichaAlunoID',
        
    // ];

    public function FICHA() {
        return $this->belongsTo(FICHA::class);
        }      
     
}
