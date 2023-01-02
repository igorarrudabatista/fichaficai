<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_CATEGORIA extends Model
{
    use HasFactory;
    protected $table = 'TB_CATEGORIA';

    protected $fillable = [
        'FichaCatNome',
        'FichaCatSts',
    
        
    ];



    // public function TB_FICHA(){
    //     return $this->belongsToMany(TB_FICHA::class);
    // }
}
