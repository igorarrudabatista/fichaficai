<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_FICHA extends Model


{
    use HasFactory;
    protected $table = 'TB_FICHA';

    protected $fillable = [
        'FichaStatus',
        'FichaCategoriaID',
        'FichaEscolaID',
        'FichaAlunoID',
        
    ];

    public function tb_categoria() {
        return $this->belongsTo(TB_CATEGORIA::class, "requestor_id");
        }    
        
        public function tb_escola() {
            return $this->belongsTo(TB_ESCOLA::class);
            }    
     
}
