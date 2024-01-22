<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HimpunanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listKegiatan(){
        return view('backend.pages.himpunan.list', [
            'title' => 'Himpunan',
            'NavbarTitle' => 'Himpunan',
            'daftarKegiatan' => Post::where('categoryId', 8)->get()
        ]);
    }

    public function addKegiatan(){
        return view('backend.pages.himpunan.add', [
            'title' => 'Himpunan',
            'NavbarTitle' => 'Himpunan'
        ]);
    }



    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
