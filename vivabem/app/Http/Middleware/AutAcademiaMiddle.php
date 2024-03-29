<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Usuario;
use App\Models\Funcionario;
use App\Models\Aluno;
use Illuminate\Http\Request;

class AutAcademiaMiddle
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $tipoUser)
    {
        $email = session('email');

        if($email){

            $usuario = Usuario::where('emailUsuario', $email)->first();

            if(!$usuario) {
                return redirect()->route('login')->withErrors(['email' => 'Não autenticado']);
            }

            $tipoUsuario = $usuario->tipo_usuario;

            if($tipoUsuario){
                $tipo = null;

                if($tipoUsuario instanceof Aluno) {
                    $tipo = 'aluno';
                } elseif ($tipoUsuario instanceof Funcionario) {
                    $tipo = $tipoUsuario->tipo_funcionario;
                }
            }

            if($tipo === $tipoUser){

                return $next($request);

            }else{

                return redirect()->route('login')->withErrors(['Email' => 'Não autenticado']);

            }

         }
    }
}
