<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;


Route::group(['middleware' => []], function () {
   Route::controller(ViewController::class)->group(function(){
    Route::get('/', 'main')->name('beranda');
    Route::get('/page/profil-transportasi-ulbi', 'profil')->name('profil');
    Route::get('/page/visi-misi', 'visiMisi')->name('visiMisi');
    Route::get('/page/struktur-organisasi', 'strukturOrganisasi')->name('strukturOrganisasi');
    Route::get('/page/keunikan-prodi', 'keunikanProdi')->name('keunikanProdi');
    Route::get('/page/akreditasi-prodi', 'akreditasiProdi')->name('akreditasiProdi');
   });
});
