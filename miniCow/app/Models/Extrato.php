<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extrato extends Model
{
    use HasFactory;
    protected $fillable=["valor"];
    public function usuarios(){
        $this->belongsTo(Usuarios::class);
    }
}
