<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index(){
        // Recuperando o ID do aluno da sessão
        $idAluno = session('id');

        // Buscando o aluno pelo ID no banco de dados
        $aluno = Aluno::find($idAluno);

        // Verificando se o aluno foi encontrado
        if(!$aluno) {
            // Se o aluno não for encontrado, você pode redirecionar para uma página de erro ou fazer outra ação adequada
            abort(404, 'Aluno não encontrado');
        }

        // Passando o objeto $aluno para a view
        //dd($aluno);
        return view('dashboard.alunos.index', compact('aluno'));
    }
}
