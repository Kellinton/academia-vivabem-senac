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



        if(!$usuario) {                        // emailUsuario
            return back()->withErrors(['email' => 'O email informado não está cadastrado']);
        }

        if($usuario->senhaUsuario != $senha) {
            return back()->withErrors(['password' => 'Senha incorreta.']);
        }

        // dd($usuario); // validação

        $tipoUsuario = $usuario->tipo_usuario;

        // dd($tipoUsuario);

        if($tipoUsuario instanceof Aluno) {

            dd($tipoUsuario);

        }elseif($tipoUsuario instanceof Funcionario){

            dd($tipoUsuario);
        }else{
            dd("chegou");
        }
    }
}