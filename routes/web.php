<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PortoController;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('main.home');
});

Route::get('/service', function () {
    return view('main.service');
});

Route::get('/product', function () {
    return view('main.product');
});

Route::get('/porto', function () {
    return view('main.porto');
});

Route::get('/contact', function () {
    return view('main.contact');
});


Route::get('/porto', [PortoController::class,'index']);

Route::post('/contact/test', [ContactController::class,'kirimpesan']);

Route::get('/login', [AdminController::class,'index'])->name('login')->middleware('guest');
Route::post('/login/test', [AdminController::class,'login'])->middleware('guest');
Route::get('/logout', [AdminController::class,'logout'])->middleware('auth');
Route::get('/dashboard', [AdminController::class,'dashboard'])->middleware('auth');
Route::get('/dashboard/{id}', [AdminController::class, 'edit'])->name('contact.edit')->middleware('auth');
Route::put('/contact/{id}', [AdminController::class, 'update'])->name('contact.update')->middleware('auth');
Route::delete('/dashboard/{id}', [AdminController::class, 'delete'])->name('contact.delete')->middleware('auth');
Route::get('/portofolio', [AdminController::class, 'seeporto'])->middleware('auth');
Route::get('/porto/tambah', [AdminController::class, 'tambah'])->middleware('auth');
Route::post('/tambah/test', [AdminController::class, 'tambahporto'])->middleware('auth');
Route::get('/porto/{id}', [AdminController::class, 'editporto'])->middleware('auth');
Route::put('/pedit/{id}', [AdminController::class, 'updateporto'])->middleware('auth');
Route::delete('phapus/{id}', [AdminController::class, 'destroy'])->middleware('auth');
Route::get('/add/about', [AdminController::class, 'add'])->middleware('auth');
Route::post('/add/test', [AdminController::class, 'addabout'])->middleware('auth');
Route::delete('/hapusabout/{id}', [AdminController::class, 'hapusabout'])->middleware('auth');
Route::get('/add/product', [AdminController::class, 'padd'])->middleware('auth');
Route::post('/add/ptest', [AdminController::class, 'addproduct'])->middleware('auth');
Route::delete('/hapusproduct/{id}', [AdminController::class, 'hapusproduct'])->middleware('auth');
Route::get('/add/advent', [AdminController::class, 'aadd'])->middleware('auth');
Route::post('/add/atest', [AdminController::class, 'addadvent'])->middleware('auth');
Route::get('/aedit/{id}', [AdminController::class, 'adedit'])->middleware('auth');
Route::put('/editad/{id}', [AdminController::class, 'adventedit'])->middleware('auth');
