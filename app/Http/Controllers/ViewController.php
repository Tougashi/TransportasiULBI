<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function main()
    {
        return view('pages.home', [
            'title' => 'Fakultas : S1 Manajemen Transportasi'
        ]);
    }
}
