<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auxiliar extends Model
{
    use HasFactory;

    public function usuarios(){
        $this->belongsTo(Usuario::class);
    }
    public function vaquinhas(){
        $this->belongsTo(Vaquinha::class);
    }
}
