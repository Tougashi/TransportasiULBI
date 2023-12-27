<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Termwind\Components\BreakLine;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.articles', [
            'title' => 'Articles',
            'articles' => Post::whereHas('category', function($q){
                $q->where('category','articles');
            })->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function event()
    {
        return view('backend.pages.events', [
            'title' => 'Events',
            'events' => Post::whereHas('category', function($q){
                $q->where('category','events');
            })->get()
        ]);
    }

    public function attention()
    {
        return view('backend.pages.attentions', [
            'title' => 'Attentions',
            'attentions' => Post::whereHas('category', function($q){
                $q->where('category','attentions');
            })->get()
        ]);
    }

    public function create($articleType)
    {
        $category = Category::all();
        switch($articleType){
            case('articles'):
                return view('backend.pages.add-article', [
                    'title' => 'Articles',
                    'category' => $category
                ]);
            break;
            case('category'):
                return view('backend.pages.add-category', [
                    'title' => 'Category'
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
        $categoryType = Category::where('slug', $articleType)->first();
        $data = $request->all();
        $data['excerpt'] = Str::limit(strip_tags($request->postBody), 200);
        $data['body'] = $request->postBody;


        $validators = Validator::make($data, [
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'excerpt' => 'required',
            'thumbnail' => 'required|image|file|max:5000',
            'categoryId' => 'required'
        ], $messages = [
            'body.required' => 'Input Isi Artikel tidak boleh kosong, periksa kembali',
            'thumbnail.required' => 'Thumbnail wajib diisi',
        ]);

        if($validators->fails()){
            return back()->with('errors', $validators->errors());
        }

        $validated = $validators->validated();
        $validated['userId'] = auth()->user()->id;
        $validated['thumbnail'] = 'thumbnails'.'/' . time() . '_' . $request->file('thumbnail')->getClientOriginalName();
        $request->file('thumbnail')->storeAs('public/', $validated['thumbnail'] );

        // if(isset($categoryType)){
        //     $validated['categoryId'] = $categoryType->id;
        // }else{
        //     $newCategory = Category::create([
        //         'category' => $articleType,
        //         'slug' => Str::slug($articleType)
        //     ]);

        //     $validated['categoryId'] = $newCategory->id;
        // }
        Post::create($validated, [
        ]);

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
            $filenametostore = time().'.'.$extension;

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
    public function show(Post $post, $articleType, $id)
    {
        $article = Post::where('id',$id)->first();
        $datas  = [
            'title' => 'Article',
            'article' => $article,
        ];
        switch($articleType){
            case('articles'):
                return view('backend.pages.edit-article', $datas);
            break;
            case('category'):
                return view('backend.pages.edit-category', $datas);
            break;
            case('events'):
                return view('backend.pages.edit-event', $datas);
            break;
            case('attentions'):
                return view('backend.pages.add-attention', $datas);
            break;
            default:
                return response(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($articleType, $id)
    {
        $post = Post::find($id);
    
        if ($post->thumbnail) {
            Storage::delete('public/' . $post->thumbnail);
        }
    
        if ($post->body) {
            $bodyPath = 'public/' . $post->body;
    
            // Menghapus file dengan ekstensi .jpg, .jpeg, atau .png
            $imageFiles = glob(storage_path('app/' . $bodyPath) . '/*.+(jpg|jpeg|png)', GLOB_BRACE);
    
            foreach ($imageFiles as $imageFile) {
                Storage::delete('public/' . $bodyPath . '/' . basename($imageFile));
            }
    
            // Hapus direktori body jika kosong setelah penghapusan file gambar
            if (count(glob(storage_path('app/' . $bodyPath) . '/*')) === 0) {
                Storage::deleteDirectory('public/' . $bodyPath);
            }
        }
    
        Post::destroy($id);
    
        return back()->with('success', 'Data Artikel berhasil dihapus');
    }
    
}
