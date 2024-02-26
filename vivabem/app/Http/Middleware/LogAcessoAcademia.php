<?php

namespace App\Http\Middleware;

use App\Models\LogAcesso;
use Closure;
use Illuminate\Http\Request;

class LogAcessoAcademia
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // return $next($request); // O next serve para seguir com o processo padrão, mesmo passando pelo middleware

        // return Response('Cheguei'); // configurando uma resposta para o middleware, servindo como um filtro

        // dd($request); // info da página

        $ip = $request->server->get('REMOTE_ADDR');
        $url = $request->getRequestUri();

        LogAcesso::create(['log' => "IP: $ip requisitou na rota: $url da aplicação"]); //criando e salvando no banco de dados o log de acesso, registro sempre que acessar a página

        return $next($request);
    }
}
