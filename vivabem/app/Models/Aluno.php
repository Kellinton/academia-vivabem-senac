<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $table = 'alunos';

    protected $fillable = [
    'nomeAluno',
    'dataAluno',
    'foneAluno',
    'enderecoAluno',
    'cidadeAluno',
    'estadoAluno',
    'cepAluno',
    'dataInscricaoAluno',
    'alturaAluno',
    'pesoAluno',
    'objetivoAluno',
    'planoAluno',
    'statusAluno'
    ];

    public function usuario() {
        return $this->morphOne(Usuario::class, 'tipo_usuario');
    }
}
