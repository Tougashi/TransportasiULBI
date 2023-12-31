<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;


Route::group(['middleware' => []], function () {
   Route::controller(ViewController::class)->group(function(){
    Route::get('/', 'main')->name('beranda');
    Route::get('/kegiatan/{posts:slug}', 'kegiatan')->name('kegiatan');
    Route::prefix('page')->group(function(){
        Route::get('/berita/{slug}', 'berita')->name('berita');
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
        Route::get('/search/{queries}', 'searchPosts')->name('searchPosts');
        Route::get('/loadMorePosts/{skip}', 'loadMorePosts')->name('loadMore');
       });
    });

   Route::prefix('admin')->group(function(){
       Route::controller(AuthController::class)->group(function(){
            Route::get('/','index')->name('login');
            Route::post('/','store');
            Route::delete('/logout','destroy');
       });
   });

});

Route::group(['middleware' => ['web','auth']], function(){
    Route::prefix('admin')->group(function(){

        Route::controller(DashboardController::class)->group(function(){
            Route::get('/dashboard', 'index');
        });

        Route::controller(UserController::class)->group(function(){
            Route::post('/user/author/update/{id}', 'update');
            Route::get('/user/author/list', 'index');
            Route::get('/user/author/show/{id}', 'show');
            Route::get('/user/author/delete/{id}', 'destroy');
            Route::get('/user/author/list/add', 'create');
            Route::post('/user/author/create/store', 'store');
            Route::get('/user/author/edit/{id}', 'edit');
        });

        Route::controller(PostController::class)->group(function(){
            Route::get('/{articleType}', 'index');
            Route::get('/events', 'event');
            Route::get('/attentions', 'attention');
            Route::get('/{articleType}/add','create');
            Route::post('/{articleType}/add/store','store');
            Route::get('/{articleType}/show/{id}','show');
            Route::put('/{articleType}/edit/{id}','edit');
            Route::post('/{articleType}/update/{id}','update');
            Route::get('/{articleType}/delete/{id}','destroy');

            // EDITOR IMAGE UPLOAD
            Route::post('/upload/image','uploadImage')->name('upload-image-body');
        });

        Route::controller(CategoryController::class)->group(function(){
            Route::get('/categories', 'index');
        });


    });
});
