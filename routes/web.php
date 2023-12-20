<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewController;


Route::group(['middleware' => []], function () {
   Route::controller(ViewController::class)->group(function(){
    Route::get('/', 'main')->name('beranda');
    Route::get('/page/profil-transportasi-ulbi', 'profil')->name('profil');
    Route::get('/page/visi-misi', 'visiMisi')->name('visiMisi');
    Route::get('/page/struktur-organisasi', 'strukturOrganisasi')->name('strukturOrganisasi');
    Route::get('/page/keunikan-prodi', 'keunikanProdi')->name('keunikanProdi');
    Route::get('/page/akreditasi-prodi', 'akreditasiProdi')->name('akreditasiProdi');
    Route::get('/page/profil-lulusan', 'profilLulusan')->name('profilLulusan');
    Route::get('/page/gelar-lulusan', 'gelarLulusan')->name('gelarLulusan');
    Route::get('/page/kompetensi-lulusan', 'kompetensiLulusan')->name('kompetensiLulusan');
    Route::get('/page/metode-pembelajaran', 'metodePembelajaran')->name('metodePembelajaran');
    Route::get('/page/daftar-mata-kuliah-kurikulum', 'daftarMatkul')->name('daftarMatkul');
    Route::get('/page/profil-dosen-prodi', 'profilDosen')->name('profilDosen');

    Route::get('/page/kegiatan-mahasiswa', 'kegiatanMahasiswa')->name('kegiatanMahasiswa');
    Route::get('/page/organisasi-mahasiswa', 'organisasiMahasiswa')->name('organisasiMahasiswa');
    Route::get('/page/sarana-prasarana', 'saranaPrasarana')->name('saranaPrasarana');
    Route::get('/page/penerimaan-mahasiswa-baru', 'penerimaanMahasiswaBaru')->name('penerimaanMahasiswaBaru');
    Route::get('/page/sistem-informasi-akademik', 'sisfoAkademik')->name('sisfoAkademik');
    Route::get('/page/virtual-learning', 'vLearning')->name('vLearning');
    Route::get('/page/e-jurnal', 'eJurnal')->name('eJurnal');
    Route::get('/page/kerjasama-luar-negeri', 'kerjasamaLuarNegeri')->name('kerjasamaLuarNegeri');
    Route::get('/page/kerjasama-dalam-negeri', 'kerjasamaDalamNegeri')->name('kerjasamaDalamNegeri');
    Route::get('/page/mbkm-student-exchange', 'studentExchange')->name('studentExchange');
   });

   Route::resource('backend', AuthController::class)->missing(function(Request $request){
    return Redirect::route('backend.pages.404');
   });
});

