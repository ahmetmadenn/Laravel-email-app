<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YonetimController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/index',[YonetimController::class,'index'])->name('index');
Route::get('/musteri-ekle',[YonetimController::class,'musteriEkle'])->name('musteri-ekle');
Route::post('/musteri-ekle-post',[YonetimController::class,'MusteriEklePost'])->name('musteri-ekle-post');
Route::get('/musteri-liste',[YonetimController::class,'musteriListe'])->name('musteri-liste');
Route::get('/musteri-duzenle/{id}',[YonetimController::class,'musteriDuzenle'])->name('musteri-duzenle');
Route::post('/musteri-duzenle-post/{id}',[YonetimController::class,'MusteriDuzenlePost'])->name('musteri-duzenle-post');
Route::get('/musteri-sil/{id}',[YonetimController::class,'musteriSil'])->name('musteri-sil');
Route::get('/toplu-mail-olustur',[MailController::class,'index'])->name('toplu-mail-olusturma');
Route::post('/mail-olustur-post',[MailController::class,'MailOlusturPost'])->name('mail-olustur-post');
