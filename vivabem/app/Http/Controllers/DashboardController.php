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

        // echo "E-mail: $email | Senha: $senha";
        // echo "<br>";

        $usuario = Usuario::where('emailUsuario', $email)->first();



        if(!$usuario) {
            return back()->withErrors(['email' => 'O email informado não está cadastrado']);
        }

        if($usuario->senhaUsuario != $senha) {
            return back()->withErrors(['password' => 'Senha incorreta.']);
        }

        // dd($usuario); // validação

        $tipoUsuario = $usuario->tipo_usuario;

        // dd($tipoUsuario);

        if($tipoUsuario instanceof Aluno) {

            // dd($tipoUsuario);
                // variável de sessão
                session([
                    'id'           =>  $tipoUsuario->idAluno,
                    'nome'         =>  $tipoUsuario->nomeAluno,
                    'tipo_usuario' =>  'Aluno',
                ]);

                return redirect()->route('dashboard.alunos');


            }elseif($tipoUsuario instanceof Funcionario){

                if($tipoUsuario->tipoFuncionario == 'admin'){

                    session([
                        'id'                =>  $tipoUsuario->idFuncionario,
                        'nome'              =>  $tipoUsuario->nomeFuncionario,
                        'tipoFuncionario'   =>  $tipoUsuario->tipoFuncionario,
                    ]);

                    return redirect()->route('dashboard.alunos');

                }elseif($tipoUsuario->tipoFuncionario == 'instrutor'){

                    session([
                        'id'                =>  $tipoUsuario->idFuncionario,
                        'nome'              =>  $tipoUsuario->nomeFuncionario,
                        'tipoFuncionario'   =>  $tipoUsuario->tipoFuncionario,
                    ]);

                    return redirect()->route('dashboard.alunos');

                }

        }

        return back()->withErrors(['email' => 'Erro desconhecido de autenticação']); // retorna a página de origem com uma mensagem de erro
    }
}
