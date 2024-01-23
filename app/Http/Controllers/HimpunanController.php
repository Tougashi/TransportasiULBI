<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function listAnggota(){
        return view('backend.pages.himpunan.anggota.list', [
            'title' => 'Himpunan',
            'NavbarTitle' => 'Anggota Himpunan',
            'daftarAnggota' => Post::whereHas('category', function($q){
                $q->where('slug', 'anggota-himpunan');
            })->get()
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
    public function storeNewKegiatan(Request $request)
    {
        $categoryType = Category::where('slug', 'himpunan')->first();
        $data = $request->all();
        $data['categoryId'] = $categoryType->id;
        $data['excerpt'] = Str::limit(strip_tags($request->postBody), 200);
        $data['body'] = $request->postBody;
        $data['image'] = $request->bodyImage;

        $checkSlug = Post::whereHas('category', function($q){
            $q->where('slug', 'himpunan');
        })->where('title', $request->title)->first();

        if(!empty($checkSlug)){
            $data['slug'] = $request->slug.'-'.mt_rand(0,9999);
        }else{
            $data['slug'] = $request->slug;
        }

        $validators = Validator::make($data,[
            'title' => 'required',
            // 'date' => 'required|after: 2 days',
            'thumbnail' => 'required|file|image|max:5000',
            'slug' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'categoryId' => 'required'
        ]);

        if ($validators->fails()) {
            return back()->with('errors', $validators->errors());
        }


        $validated = $validators->validated();
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = 'thumbnails/' . time() . '_' . $request->file('thumbnail')->getClientOriginalName();
            $request->file('thumbnail')->storeAs('public/', $thumbnailPath);
            $validated['thumbnail'] = $thumbnailPath;
        }
        $validated['userId'] = auth()->user()->id;

        Post::create($validated);

        return redirect('/admin/'.$categoryType->slug.'/kegiatan/list')->with('success', 'Artikel / Postingan berhasil di Upload');
    }

    /**
     * Display the specified resource.
     */

     public function editKegiatanHimpunan($slug)
     {
        $data = Post::where('slug', $slug)->first();
        return view('backend.pages.himpunan.edit', [
            'title' => 'Himpunan',
            'NavbarTitle' => 'Himpunan',
            'article' => $data
        ]);

     }


     public function updateKegiatanHimpunan($slug, Request $request)
     {

        // dd($request->all());
        $data = $request->all();
        $data['excerpt'] = Str::limit(strip_tags($request->postBody), 200);
        $data['body'] = $request->postBody;
        $data['image'] = $request->bodyImage;

        if(empty($request->thumbnail)){
            $data['thumbnail'] = Post::where('slug', $slug)->pluck('thumbnail')->first();
        }else{
            $data['thumbnail'] = $request->thumbnail;
        }

        // if(i)

        $validator = Validator::make($data, [
            'title' => 'required',
            'slug' => 'required',
            'thumbnail' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        if($validator->fails()){
            return back()->with('errors', $validator->errors());
        }

        $validated = $validator->validated();
        $validated['userId'] = auth()->user()->id;

        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = 'thumbnails/' . time() . '_' . $request->file('thumbnail')->getClientOriginalName();
            $request->file('thumbnail')->storeAs('public/', $thumbnailPath);
            $validated['thumbnail'] = $thumbnailPath;
        }

        Post::where('slug', $slug)->update($validated);
        return redirect()->intended('/admin/himpunan/kegiatan/list/');

     }



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
    public function destroyKegiatanHimpunan($slug, Request $request)
    {
        Post::where('slug', $slug)->delete();
        return back();
    }
}
