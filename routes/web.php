<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;

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


// // Basic Router
// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Route::get('/world', function () {
//     return 'World';
// });

// Route::get('/', function () {
//     return 'Selamat Datang';
// });

// Route::get('/about', function () {
//     return 'Nim : 2241720069' . '<br>' . 'Nama : Icha Dewi Putriana';
// });



// // Route Parameters
// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya ' . $name;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
// });

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID ' . $id;
// });



// // Optional Parameters
// Route::get('/user/{name?}', function ($name = ' ') {
//     return 'Nama saya ' . $name;
// });



// // Controller
// Route::get('/hello', [WelcomeController::class,'hello']);

// // index
// Route::get("/",[PageController::class,"index"]);

// // about
// Route::get("about",[PageController::class,"about"]);

// // articles
// Route::get('/articles/{id}', [PageController::class, 'articles']);


// // Controller
// Route::get('/hello', [WelcomeController::class,'hello']);

// index
Route::get("/", [HomeController::class, "index"]);

// about
Route::get("about", [AboutController::class, "about"]);

// articles
Route::get('/articles/{id}', [ArticleController::class, 'articles']);


// // Resource Controller
// Route::resource('photos', PhotoController::class);

// 
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'Icha']);
// });

// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Icha']);
// });

Route::get('/greeting', [WelcomeController::class, 'greeting']);
