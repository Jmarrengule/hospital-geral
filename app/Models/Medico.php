<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    /** @use HasFactory<\Database\Factories\MedicoFactory> */
    use \Illuminate\Database\Eloquent\Factories\HasFactory;


    protected $fillable = [
        'nombre',
        'apelido',
        'especialidade',
        'telefone',
        'email',
        'disponibilidade',
    ];
}
