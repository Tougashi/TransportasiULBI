<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function main()
    {
        return view('pages.home', [
            'NavbarTitle' => 'Beranda',
            'title' => 'Fakultas : S1 Manajemen Transportasi',
            'News' => Post::where('created_at', '<=', now())->whereHas('category', function($query){
                $query->where('slug', 'berita');
            })->latest()->get()->take(10),
            'Kegiatan' => Post::where('created_at', '<=', now())->whereHas('category', function($query){
                $query->where('slug', 'kegiatan');
            })->latest()->get(),
            'pengumuman' => Post::where('date', '>=', now())
            ->whereHas('category', function($query) {
                $query->where('slug', 'pengumuman');
            })
            ->latest()
            ->get(),
            'event' => Post::where('date', '>=', now())
            ->whereHas('category', function($query) {
                $query->where('slug', 'event');
            })
            ->latest()
            ->get(),
            'dosen' => Post::where('created_at','<=',now())->whereHas('category', function($query){
                $query->where('slug', 'dosen');
            })->latest()->get(),
            'review' => Post::where('created_at','<=',now())->whereHas('category', function($query){
                $query->where('slug', 'review');
            })->latest()->get(),
            'posts' => Post::all()
        ]);
    }

    public function berita($slug)
    {
        $post = Post::with('author')->where('slug', $slug)->get();
        $popularPosts = Post::whereNot('slug', $slug)->whereHas('category', function($q){
            $q->where('slug', 'berita');
        })->orderBy('views', 'DESC')->get()->take(5);
        // dd($popularPosts);
        if(isset($post)){
            $increaseViews = (intval($post[0]->views) + intval(1));
            Post::where('id',$post[0]->id)->update(['views' => $increaseViews]);
            return view('pages.berita',[
                'title' => 'Berita | '.$post[0]->title,
                'data' => $post,
                'NavbarTitle' => 'Berita',
                'popularPost' => $popularPosts,
            ]);
        }else{
            return response(404, 'Postingan tidak ditemukan!');
        }
    }

    public function kegiatan()
    {
        return view('pages.kegiatan',[
            'title' => 'Kegiatan Mahasiswa',
            'NavbarTitle' => 'Kegiatan',
        ]);
    }

    public function profil(){
        return view('pages.profil', [
            'NavbarTitle' => 'Profil',
            'title' => 'Fakultas : S1 Manajemen Transportasi',
        ]);
    }

    public function visiMisi(){
        return view('pages.visi-misi', [
            'NavbarTitle' => 'Visi & Misi',
            'title' => 'Fakultas : S1 Manajemen Transportasi',
        ]);
    }

    public function strukturOrganisasi(){
        return view('pages.struktur-organisasi', [
            'NavbarTitle' => 'Struktur Organisasi',
            'title' => 'Fakultas : S1 Manajemen Transportasi',
        ]);
    }

    public function keunikanProdi(){
        return view('pages.keunikan-prodi', [
            'NavbarTitle' => 'Keunikan Prodi',
            'title' => 'Fakultas : S1 Manajemen Transportasi',
        ]);
    }

    public function akreditasiProdi(){
        return view('pages.akreditasi-prodi', [
            'NavbarTitle' => 'Akreditasi Prodi',
            'title' => 'Fakultas : S1 Manajemen Transportasi',
        ]);
    }

    public function profilLulusan(){
        return view('pages.profil-lulusan', [
            'NavbarTitle' => 'Profil Lulusan',
            'title' => 'Fakultas : S1 Manajemen Transportasi',
        ]);
    }

    public function gelarLulusan(){
        return view('pages.gelar-lulusan', [
            'NavbarTitle' => 'Gelar Lulusan',
            'title' => 'Fakultas : S1 Manajemen Transportasi',
        ]);
    }

    public function kompetensiLulusan(){
        return view('pages.kompetensi-lulusan', [
            'NavbarTitle' => 'Kompetensi Lulusan',
            'title' => 'Fakultas : S1 Manajemen Transportasi',
        ]);
    }

    public function metodePembelajaran(){
        return view('pages.metode-pembelajaran', [
            'NavbarTitle' => 'Metode Pembelajaran',
            'title' => 'Fakultas : S1 Manajemen Transportasi',
        ]);
    }

    public function daftarMatkul(){
        return view('pages.daftar-matkul', [
            'NavbarTitle' => 'Kurikulum & MK Unggulan',
            'title' => 'Fakultas : S1 Manajemen Transportasi',
        ]);
    }

    public function profilDosen(){
        return view('pages.profil-dosen', [
            'NavbarTitle' => 'Profil Dosen',
            'title' => 'Fakultas : S1 Manajemen Transportasi',
            'data' => Post::where('categoryId', 5)->get()
        ]);
    }

    public function kegiatanMahasiswa(){
        return redirect()->away('https://www.instagram.com/himaporta/?next=%2F');
    }

    public function organisasiMahasiswa(){
        return view('pages.organisasi-mahasiswa', [
            'NavbarTitle' => 'Organisasi Mahasiswa',
            'title' => 'Fakultas : S1 Manajemen Transportasi',
        ]);
    }

    public function saranaPrasarana(){
        return view('pages.sarana-prasarana', [
            'NavbarTitle' => 'Sarana Prasarana',
            'title' => 'Fakultas : S1 Manajemen Transportasi',
        ]);
    }

    public function penerimaanMahasiswaBaru(){
        return redirect()->away('https://admission.ulbi.ac.id/');
    }

    public function sisfoAkademik(){
        return redirect()->away('https://sip.ulbi.ac.id/siap/besan.depan.php');
    }

    public function vLearning(){
        return redirect()->away('https://elearning.ulbi.ac.id/');
    }

    public function eJurnal(){
        return redirect()->away('https://ejurnal.ulbi.ac.id/');
    }

    public function kerjasamaLuarNegeri(){
        return view('pages.kerjasama-luar-negeri', [
            'NavbarTitle' => 'Kerjasama Luar Negeri',
            'title' => 'Fakultas : S1 Manajemen Transportasi',
        ]);
    }

    public function kerjasamaDalamNegeri(){
        return view('pages.kerjasama-dalam-negeri', [
            'NavbarTitle' => 'Kerjasama Dalam Negeri',
            'title' => 'Fakultas : S1 Manajemen Transportasi',
        ]);
    }

    public function studentExchange(){
        return view('pages.student-exchange', [
            'NavbarTitle' => 'MBKM & Student Exchange',
            'title' => 'Fakultas : S1 Manajemen Transportasi',
        ]);
    }

    public function searchPosts($queries){
        $posts = Post::where('title', 'LIKE', '%'.$queries.'%')->whereHas('category', function($q){
            $q->where('slug', 'berita');
        })->get();
        // dd($posts);
        return view('pages.search-page-result', [
            'title' => 'Fakultas : S1 Manajemen Transportasi',
            'NavbarTitle' => '',
            'searchQuery' => $queries,
            'articles' => $posts
        ]);
    }


    public function loadMorePosts($skip){
        $data = Post::whereHas('category', function($q){
            $q->where('slug', 'berita');
        })->latest()->get()->skip($skip)->take(10);

        return response()->json(['data' => $data]);
    }


}
