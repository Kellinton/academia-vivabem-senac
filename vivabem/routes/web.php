<?php

use App\Http\Controllers\AdministrativoController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetalhesController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstrutorController;
use App\Http\Controllers\ModalidadeController;
use App\Http\Controllers\SobreController;
use App\Http\Middleware\AutAcademiaMiddle;
use App\Http\Middleware\LogAcessoAcademia;
use App\Mail\ContatoEmail;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Home
Route::get('/', [HomeController::class, 'index'])->name('home');

//Sobre
Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');

//Contato
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');

//Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog-detalhes', [BlogDetalhesController::class, 'index'])->name('blog-detalhes');

//Modalidade
Route::get('/modalidade', [ModalidadeController::class, 'index'])->name('modalidade');
Route::get('/modalidade/musculacao', [ModalidadeController::class, 'musculacao'])->name('modalidade.musculacao');
Route::get('/modalidade/aerobica', [ModalidadeController::class, 'aerobica'])->name('modalidade.aerobica');
Route::get('/modalidade/alongamento-flexibilidade', [ModalidadeController::class, 'alongamentoFlexibilidade'])->name('modalidade.alongamento-flexibilidade');
Route::get('/modalidade/artes-marciais', [ModalidadeController::class, 'artesMarciais'])->name('modalidade.artes-marciais');
Route::get('/modalidade/natacao', [ModalidadeController::class, 'natacao'])->name('natacao');
Route::get('/modalidade/pilates', [ModalidadeController::class, 'pilates'])->name('pilates');
Route::get('/modalidade/treinamento-funcional', [ModalidadeController::class, 'treinamentoFuncional'])->name('modalidade.treinamento-funcional');
Route::get('/modalidade/treino-cardiovascular', [ModalidadeController::class, 'treinoCardiovascular'])->name('modalidade.treino-cardiovascular');
Route::get('/modalidade/yoga', [ModalidadeController::class, 'yoga'])->name('modalidade.yoga');
Route::get('/modalidade/zumba', [ModalidadeController::class, 'zumba'])->name('modalidade.zumba');



//LOGIN
Route::get('/login', [DashboardController::class, 'index'])->name('login');
Route::post('/login', [DashboardController::class, 'autenticar'])->name('login');



Route::post('/contato/enviar', [ContatoController::class, 'salvarNoBanco'])->name('contato.enviar');
Route::post('/contato/enviarnew', [ContatoController::class, 'salvarEmail'])->name('contato.enviarnew');



//DASHBOARD (Aluno, Administrativo, Instrutor)
//Aluno
Route::middleware(['autenticacao:aluno'])->group(function (){

    Route::get('dashboard/alunos', [AlunoController::class, 'index'])->name('dashboard.alunos');

});
//Administrativo
Route::middleware(['autenticacao:admin'])->group(function (){

    Route::get('dashboard/administrativo', [AdministrativoController::class, 'index'])->name('dashboard.administrativo');

    // Rotas CRUD de aluno
    // Route::get('/dashboard/administrativo')
});


//Instrutor
Route::middleware(['autenticacao:instrutor'])->group(function (){

    Route::get('dashboard/instrutor', [InstrutorController::class, 'index'])->name('dashboard.instrutor');

});



// SAIR
Route::get('/sair', function(){
    session()->flush(); //limpa sessão
    return redirect('/'); // redireciona para a raíz do site
})->name('sair');




// Route::middleware(LogAcessoAcademia::class)
//                  ->get('/contato', [ContatoController::class, 'index'])
//                  ->name('contato'); // Rota para registrar Log de acesso da página contato, criado de forma individual
