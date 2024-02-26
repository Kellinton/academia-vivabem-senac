<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class AdministrativoController extends Controller
{
    public function index(){
        return view('dashboard.administrativo.index');
    }


    // Funcionario
    public function indexFunc() {
        $idFunc = session('id');
        $func = Funcionario::find($idFunc);

        $listaFunc = Funcionario::all();

        //dd($func);

        return view('dashboard.administrativo.funcionario.index', compact('func', 'listaFunc'));
    }

    public function createfuncionario(){
        
    }
}



