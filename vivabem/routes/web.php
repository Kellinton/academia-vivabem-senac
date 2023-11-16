<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GalleryDetailsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ModalidadeController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectDetailsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceDetailsController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopDetailsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TeamDetailsController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class,'index'])->name('about');
Route::get('/modalidade', [ModalidadeController::class, 'index'])->name('modalidade');
Route::get('/modalidade/musculacao', [ModalidadeController::class, 'musculacao'])->name('modalidade.musculacao');
Route::get('/blog', [BlogController::class,'index'])->name('blog');
Route::get('/blog-details', [BlogDetailsController::class,'index'])->name('blog-details');
Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::get('/error', [ErrorController::class,'index'])->name('error');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/pricing', [PricingController::class, 'index'])->name('index');
Route::get('/project', [ProjectController::class, 'index'])->name('project');
Route::get('/project-details', [ProjectDetailsController::class, 'index'])->name('project-details');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/shop-details', [ShopDetailsController::class, 'index'])->name('shop-details');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/team-details', [TeamDetailsController::class, 'index'])->name('team-details');

