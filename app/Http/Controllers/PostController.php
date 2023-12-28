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
    public $tipe;
    public function index($articleType)
    {
        $this->tipe = $articleType;
        $articles = Post::whereHas('category', function($q){
            $q->where('slug',$this->tipe);
        })->get();
        $datas = [
            'title' => Category::where('slug',$articleType)->pluck('category')->first(),
            'articles' => $articles
        ];
        switch($articleType){
            case 'berita':
                return view('backend.pages.News.articles', $datas);
            default:
            return view('errors.404');
            break;
        };
    }

    /**
     * Show the form for creating a new resource.
     */

    // public function event()
    // {
    //     return view('backend.pages.Event.article', [
    //         'title' => 'Events',
    //         'events' => Post::whereHas('category', function($q){
    //             $q->where('category','events');
    //         })->get()
    //     ]);
    // }

    // public function attention()
    // {
    //     return view('backend.pages.attentions', [
    //         'title' => 'Attentions',
    //         'attentions' => Post::whereHas('category', function($q){
    //             $q->where('category','attentions');
    //         })->get()
    //     ]);
    // }

    public function create($articleType)
    {
        $category = Category::all();
        return view('backend.pages.news.add-article', [
            'title' => 'Berita',
            'category' => $category
        ]);

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

        Post::create($validated, [
        ]);

        return redirect('/backend/berita/list')->with('success', 'Artikel / Postingan berhasil di Upload');

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
        $article = Post::find($id);
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
            $bodyContent = $post->body;

            $pattern = '/\b(?:\w*\.)(jpg|jpeg|png)\b/';
            preg_match_all($pattern, $bodyContent, $matches);
    
            if (!empty($matches[0])) {
                foreach ($matches[0] as $filename) {
                    Storage::delete('public/' . $filename);
                }
            }
    
            $bodyPath = 'public/' . dirname($post->body);
            if (count(glob(storage_path('app/' . $bodyPath) . '/*')) === 0) {
                Storage::deleteDirectory($bodyPath);
            }
        }
    
        Post::destroy($id);
    
        return back()->with('success', 'Data Artikel berhasil dihapus');
    }
    

}
