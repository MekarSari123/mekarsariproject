<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\SuratpengantarController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', [SuratpengantarController::class,'suratpengantar'])->middleware('auth');
Route::get('/penduduk', [PendudukController::class,'penduduk'])->middleware('auth');
Route::get('/penduduk/{id}', [PendudukController::class,'show'])->middleware('auth');
Route::get('/cetaksuratketerangan/{id}',[SuratpengantarController::class,'show'])->middleware('auth');
Route::get('/cetaksuratketeranganword/{id}',[SuratpengantarController::class,'show1'])->middleware('auth');
Route::get('/cetaksuratketerangan11/{id}',[SuratpengantarController::class,'show2'])->middleware('auth');

Route::get('/login',[LoginController::class,"index"])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,"authenticate"]);
Route::post('/logout',[LoginController::class,"logout"]);

Route::get('/register',[RegisterController::class,"index"]);
Route::post('/register',[RegisterController::class,"store"]);

Route::get('/dashboard',function(){
    return view('dashboard.index');
})->middleware('auth');

// Route::resource('/dashboard/suratpengantar',[DashboardPostController::class])->middleware('auth');

