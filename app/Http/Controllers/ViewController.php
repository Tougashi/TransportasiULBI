<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function main()
    {
        return view('pages.home', [
            'NavbarTitle' => 'Beranda',
            'title' => 'Fakultas : S1 Manajemen Transportasi',
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
}
