<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectDetailsController extends Controller
{
    public function index(){
        return view('site.projeto-detalhes');
    }

}
