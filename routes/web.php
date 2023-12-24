<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriesController;


Route::group(['middleware' => []], function () {
   Route::controller(ViewController::class)->group(function(){
    Route::get('/', 'main')->name('beranda');
    Route::prefix('page')->group(function(){
        Route::get('/profil-transportasi-ulbi', 'profil')->name('profil');
        Route::get('/visi-misi', 'visiMisi')->name('visiMisi');
        Route::get('/struktur-organisasi', 'strukturOrganisasi')->name('strukturOrganisasi');
        Route::get('/keunikan-prodi', 'keunikanProdi')->name('keunikanProdi');
        Route::get('/akreditasi-prodi', 'akreditasiProdi')->name('akreditasiProdi');
        Route::get('/profil-lulusan', 'profilLulusan')->name('profilLulusan');
        Route::get('/gelar-lulusan', 'gelarLulusan')->name('gelarLulusan');
        Route::get('/kompetensi-lulusan', 'kompetensiLulusan')->name('kompetensiLulusan');
        Route::get('/metode-pembelajaran', 'metodePembelajaran')->name('metodePembelajaran');
        Route::get('/daftar-mata-kuliah-kurikulum', 'daftarMatkul')->name('daftarMatkul');
        Route::get('/profil-dosen-prodi', 'profilDosen')->name('profilDosen');

        Route::get('/kegiatan-mahasiswa', 'kegiatanMahasiswa')->name('kegiatanMahasiswa');
        Route::get('/organisasi-mahasiswa', 'organisasiMahasiswa')->name('organisasiMahasiswa');
        Route::get('/sarana-prasarana', 'saranaPrasarana')->name('saranaPrasarana');
        Route::get('/penerimaan-mahasiswa-baru', 'penerimaanMahasiswaBaru')->name('penerimaanMahasiswaBaru');
        Route::get('/sistem-informasi-akademik', 'sisfoAkademik')->name('sisfoAkademik');
        Route::get('/virtual-learning', 'vLearning')->name('vLearning');
        Route::get('/e-jurnal', 'eJurnal')->name('eJurnal');
        Route::get('/kerjasama-luar-negeri', 'kerjasamaLuarNegeri')->name('kerjasamaLuarNegeri');
        Route::get('/kerjasama-dalam-negeri', 'kerjasamaDalamNegeri')->name('kerjasamaDalamNegeri');
        Route::get('/mbkm-student-exchange', 'studentExchange')->name('studentExchange');
       });
    });

   Route::prefix('backend')->group(function(){
       Route::controller(AuthController::class)->group(function(){
            Route::get('/','index')->name('login');
            Route::post('/','store');
            Route::delete('/logout','destroy');
       });
   });

});

Route::group(['middleware' => ['web','auth']], function(){
    Route::prefix('backend')->group(function(){

        Route::controller(DashboardController::class)->group(function(){
            Route::get('/dashboard', 'index');
        });

        Route::controller(PostsController::class)->group(function(){
            Route::get('/articles', 'index');
            Route::get('/events', 'event');
            Route::get('/attentions', 'attention');
            Route::get('/{articleType}/add','create');
            Route::post('/{articleType}/add/store','store');

            // EDITOR IMAGE UPLOAD
            Route::post('/article/upload/image','uploadImage');
        });

        Route::controller(CategoriesController::class)->group(function(){
            Route::get('/categories', 'index');
        });

        Route::controller(UserController::class)->group(function(){
            Route::get('/authors', 'index');
        });

    });
});
