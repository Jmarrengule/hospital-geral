<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    /** @use HasFactory<\Database\Factories\PacienteFactory> */
    use \Illuminate\Database\Eloquent\Factories\HasFactory;


    protected $fillable = [
        'nome',
        'apelido',
        'genero',
        'ficha_nascimento',
        'nacionalidade',
        'naturalidade',
        'estado_civil',
        'profissao',
        'endereco',
        'telefone',
        'email',
        ];
}
