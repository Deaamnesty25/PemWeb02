<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

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
Route::get('/welcome',function() {
    echo "selamat datang di laravel";
}); 

Route:: get('/greeting', function(){
    return view('greeting');
}); 

Route:: get('/', function(){
    return view('index');
}); 

Route::get('/mobil',[MobilController::class,'index']);
Route::get('/mobil/create',[MobilController::class,'create']);
Route::post('/mobil/simpanData',[MobilController::class,'store']);
Route::get('/mobil/edit/{id}',[MobilController::class,'edit']);
Route::post('/mobil/update/{id}', [MobilController::class, 'update']);
Route::get('/mobil/delete/{id}',[MobilController::class,'delete']);

Route::get('/merk',[MerkController::class,'index']);
Route::get('/merk/create',[MerkController::class,'create']);
Route::post('/merk/simpanData',[MerkController::class,'store']);

Route::get('/merk/edit/{id}',[MerkController::class,'edit']);
Route::post('/merk/update/{id}', [MerkController::class, 'update']);
Route::get('/merk/delete/{id}',[MerkController::class,'delete']);

// Route Folder Tipe Mobil
Route::get('/tipe_mobil', [TipeMobilController::class, 'index']);
Route::get('/tipe_mobil/create', [TipeMobilController::class, 'create']);
Route::post('/tipe_mobil/simpan-data', [TipeMobilController::class, 'store']);
Route::get('/tipe_mobil/edit/{id}', [TipeMobilController::class, 'edit']); //edit data
Route::post('/tipe_mobil/update/{id}', [TipeMobilController::class, 'update']);
Route::get('/tipe_mobil/delete/{id}', [TipeMobilController::class, 'delete']);

//route untuk authentikasi dan registrasi
Route::get('/login',[Auth\LoginController::class, 'index']);
Route::post('/login/proses',[Auth\Controller::class,'login'])->name('login');
Route::get('/register',[Auth\Controller::class,'index']);
Route::post('/register/proses', [Auth\Controller::class, 'register']);
