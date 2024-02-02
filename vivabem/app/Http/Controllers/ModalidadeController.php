<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalidadeController extends Controller
{
    public function index(){
        return view('site.modalidade');
    }

    public function musculacao(){
        return view('site.modalidade.musculacao');
    }
    public function aerobica(){
        return view('site.modalidade.aerobica');
    }
    public function alongamentoFlexibilidade(){
        return view('site.modalidade.alongamento-flexibilidade');
    }
    public function artesMarciais(){
        return view('site.modalidade.artes-marciais');
    }
    public function natacao(){
        return view('site.modalidade.natacao');
    }
    public function pilates(){
        return view('site.modalidade.pilates');
    }
    public function treinamentoFuncional(){
        return view('site.modalidade.treinamento-funcional');
    }
    public function treinoCardiovascular(){
        return view('site.modalidade.treino-cardiovascular');
    }
    public function yoga(){
        return view('site.modalidade.yoga');
    }
    public function zumba(){
        return view('site.modalidade.zumba');
    }
}
