<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class KurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::where('categoryId', 7)->orderBy('title')->get();
        $posts = $data->groupBy('title');
        // dd($posts);

        return view('backend.pages.kurikulum.list', [
            'title' => 'Kurikulum',
            'data' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.Kurikulum.add', [
            'title' => 'Kurikulum',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data;
        $data['categoryId'] = 7;
        $rules = [
            'title' => 'required',
            'body' => 'required',
            'categoryId' => 'required',
        ];
        $data['title'] = $request->semester;
        $data['body'] = $request->namaMatkul;

        if (isset($request->praktik)) {
            $data['excerpt'] = $request->praktik;
            $data['image'] = '';

            $rules['excerpt'] = 'required';
            array_push($rules);
        } else {
            $data['excerpt'] = '';
            $data['image'] = $request->teori;

            $rules['image'] = 'required';
            array_push($rules);
        }

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return back()->with('errors', $validator->errors());
        }

        $validated = $validator->validated();
        $validated['userId'] = auth()->user()->id;

        Post::create($validated);

        return redirect()
            ->intended('/admin/kurikulum')
            ->with('success', 'Data kurikulum berhasil dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show($id, Request $request)
    {
        $data = Post::where('categoryId', 7)->where('id', $id)->first();

        return view('backend.pages.Kurikulum.edit', [
            'title' => 'Kurikulum',
            'NavbarTitle' => 'Kurikulum',
            'data' => $data
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $data;
        $data['categoryId'] = 7;
        $rules = [
            'title' => 'required',
            'body' => 'required',
            'categoryId' => 'required',
        ];
        $data['title'] = $request->semester;
        $data['body'] = $request->namaMatkul;

        if (isset($request->praktik)) {
            $data['excerpt'] = $request->praktik;
            $data['image'] = '';

            $rules['excerpt'] = 'required';
            array_push($rules);
        } else {
            $data['excerpt'] = '';
            $data['image'] = $request->teori;

            $rules['image'] = 'required';
            array_push($rules);
        }

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return back()->with('errors', $validator->errors());
        }

        $validated = $validator->validated();
        $validated['userId'] = auth()->user()->id;

        Post::where('id', $id)->update($validated);

        return redirect('/admin/kurikulum')->with('success', 'Data kurikulum berhasil diperbarui');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Post::where('categoryId', 7)->where('id', $id)->delete();
        return back()->with('success', 'Data kurikulum berhasil dihapus');
    }
}
