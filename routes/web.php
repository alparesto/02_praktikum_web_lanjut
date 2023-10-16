<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ## Praktikum 1

// Route::get('/', function() {
//     return "Selamat Datang!";
// });

// Route::get('/about', function() {
//     return "Nama : Silva Tria Alfares <br> NIM : 2320005";
// });

// Route::get('/articles/{id}', function($id) {
//     return view('articles', ["id" => $id]);
// });

// ## Praktikum 2

// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'get_articles']);

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'index']);
// Route::get('/articles/{id}', [ArticleController::class, 'index']);

// ## Praktikum 3 - Company Profile
Route::get('/', [IndexController::class, 'index']);
Route::prefix('/products')->group(function(){
    Route::get('/nasi-goreng', [ProductController::class, 'nasi_goreng']);
    Route::get('/mie-goreng', [ProductController::class, 'mie_goreng']);
    Route::get('/kebab', [ProductController::class, 'kebab']);
});
Route::get('/news', [NewsController::class, 'get_all_news']);
Route::get('/news/{slug}', [NewsController::class, 'get_news']);
Route::prefix('/program')->group(function(){
    Route::get('/belajar-java-dasar', [ProgramController::class, 'belajar_java_dasar']);
    Route::get('/belajar-html-dasar', [ProgramController::class, 'belajar_html_dasar']);
    Route::get('/belajar-css-dasar', [ProgramController::class, 'belajar_css_dasar']);
    Route::get('/belajar-js-dasar', [ProgramController::class, 'belajar_js_dasar']);
});
Route::get('/about', [AboutUsController::class, 'index']);