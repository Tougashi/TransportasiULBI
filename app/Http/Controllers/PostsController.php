<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Categories;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.articles', [
            'title' => 'Articles',
            'articles' => Posts::where('categoryId',1)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function event()
    {
        return view('backend.pages.events', [
            'title' => 'Events',
            'events' => Posts::where('categoryId', 1)->get()
        ]);
    }

    public function attention()
    {
        return view('backend.pages.attentions', [
            'title' => 'Attentions',
            'attentions' => Posts::where('categoryId',2)->get()
        ]);
    }

    public function create($articleType)
    {
        switch($articleType){
            case('articles'):
                return view('backend.pages.add-article', [
                    'title' => 'Articles'
                ]);
            break;
            case('categories'):
                return view('backend.pages.add-category', [
                    'title' => 'Categories'
                ]);
            break;
            case('authors'):
                return view('backend.pages.add-author', [
                    'title' => 'Authors'
                ]);
            break;
            case('events'):
                return view('backend.pages.add-event', [
                    'title' => 'Events'
                ]);
            break;
            case('attentions'):
                return view('backend.pages.add-attention', [
                    'title' => 'Attentions'
                ]);
            break;
            default:
                return response(404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $articleType)
    {
        $categoryType = Categories::where('slug', $articleType)->first();
        $data = $request->all();
        $data['excerpt'] = Str::limit(strip_tags($request->postBody), 200);
        $data['body'] = $request->postBody;


        $validators = Validator::make($data, [
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'excerpt' => 'required',
            'thumbnail' => 'required|image|file|max:5000',
        ]);

        if($validators->fails()){
            return response()->with('errors', $validators->errors());
        }

        $validated = $validators->validated();
        $validated['userId'] = auth()->user()->id;
        $validated['thumbnail'] = $request->file('thumbnail')->store('public/uploads/thumbnails');
        if(isset($categoryType)){
            $validated['categoryId'] = $categoryType->id;
        }else{
            $newCategory = Categories::create([
                'category' => $articleType,
                'slug' => Str::slug($articleType)
            ]);

            $validated['categoryId'] = $newCategory->id;
        }
        Posts::create($validated);

        return redirect('/backend/articles/')->with('success', 'Artikel / Postingan berhasil di Upload');

    }

    public function uploadImage(Request $request){
        if($request->hasFile('file')) {
            //get filename with extension
            $filenamewithextension = $request->file('file')->getClientOriginalName();

            //get filename without extension
            $filename = $filenamewithextension;

            //get file extension
            $extension = $request->file('file')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('file')->storeAs('public/uploads', $filenametostore);

            // you can save image path below in database
            $path = asset('storage/uploads/'.$filenametostore);

            echo $path;
            exit;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posts $posts)
    {
        //
    }
}
