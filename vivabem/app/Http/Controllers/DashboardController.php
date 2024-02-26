<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Aluno;
use App\Models\Funcionario;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('site.login');
    }
    public function autenticar(Request $request) {

        $regras = [
            'email'         => 'required|email',
            'password'      => 'required'
        ];

        $msg = [
            'email.required'    => 'O campo de e-mail é obrigatório.',
            'email.email'       => 'O e-mail informado é inválido.',
            'password.required' => 'A senha é obrigatória.'
        ];

        $request->validate($regras, $msg);

        // print_r($request->all());

        $email = $request->get('email');
        $senha = $request->get('password');


        $usuario = Usuario::where('emailUsuario', $email)->first();



        if(!$usuario) {
            return back()->withErrors(['email' => 'O email informado não está cadastrado']);
        }

        if($usuario->senhaUsuario != $senha) {
            return back()->withErrors(['password' => 'Senha incorreta.']);
        }

        // dd($usuario); // validação

        $tipoUsuario = $usuario->tipo_usuario;
     

        session([
            'email' => $usuario->emailUsuario,
        ]);

        if($tipoUsuario instanceof Aluno) {


                // variável de sessão
                session([
                    'id'           =>  $tipoUsuario->id,
                    'nome'         =>  $tipoUsuario->nomeAluno,
                    'tipo_usuario' =>  'Aluno',
                ]);

                return redirect()->route('dashboard.alunos');


            }elseif($tipoUsuario instanceof Funcionario){


                if($tipoUsuario->tipo_funcionario == 'admin'){

                    session([
                        'id'                =>  $tipoUsuario->id,
                        'nome'              =>  $tipoUsuario->nomeFuncionario,
                        'tipoFuncionario'   =>  $tipoUsuario->tipo_funcionario,
                    ]);

                    return redirect()->route('dashboard.administrativo');

                }elseif($tipoUsuario->tipo_funcionario == 'instrutor'){

                    session([
                        'id'                =>  $tipoUsuario->id,
                        'nome'              =>  $tipoUsuario->nomeFuncionario,
                        'tipoFuncionario'   =>  $tipoUsuario->tipo_funcionario,
                    ]);

                    return redirect()->route('dashboard.instrutor');

                }

        }

        return back()->withErrors(['email' => 'Erro desconhecido de autenticação']); // retorna a página de origem com uma mensagem de erro
    }
}
