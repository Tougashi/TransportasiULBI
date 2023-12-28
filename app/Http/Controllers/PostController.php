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
        $articles = Post::whereHas('category', function ($q) {
            $q->where('slug', $this->tipe);
        })->get();
        $datas = [
            'title' => Category::where('slug', $articleType)
                ->pluck('category')
                ->first(),
            'articles' => $articles,
            'tableHeads' => ['No', 'Judul', 'Author', 'Views', 'Tanggal Posting', 'Aksi'],
            'tableBodies' => [],
        ];
        switch ($articleType) {
            case 'berita':
                foreach ($articles as $item) {
                    $datas['tableBodies'][] = [
                        'id' => $item->id,
                        'judul' => $item->title,
                        'author' => $item->author->author,
                        'views' => $item->views,
                        'tanggalPosting' => $item->created_at->format('d F Y H:i'),
                    ];
                }
            break;
            case 'kegiatan':
                foreach ($articles as $item) {
                    $datas['tableBodies'][] = [
                        'id' => $item->id,
                        'judul' => $item->title,
                        'author' => $item->author->author,
                        'views' => $item->views,
                        'tanggalPosting' => $item->created_at->format('d F Y H:i'),
                    ];
                }
            break;
            case 'event':
                $datas['tableHeads'] = ['No','Judul', 'Tanggal Pelaksanaan', 'Aksi'];
                foreach ($articles as $item) {
                    $datas['tableBodies'][] = [
                        'id' => $item->id,
                        'judul' => $item->title,
                        'tanggalPelaksanaan' => $item->date,
                        'tanggalPosting' => $item->created_at->format('d F Y H:i'),
                    ];
                }
            break;
            case 'pengumuman':
                $datas['tableHeads'] = ['No','Judul', 'Tanggal Pelaksanaan', 'Aksi'];
                foreach ($articles as $item) {
                    $datas['tableBodies'][] = [
                        'id' => $item->id,
                        'judul' => $item->title,
                        'tanggalPelaksanaan' => $item->date,
                        'tanggalPosting' => $item->created_at->format('d F Y H:i'),
                    ];
                }
            break;
            case 'dosen':
                $datas['tableHeads'] = ['No','Nama Dosen', 'Jabatan', 'Aksi'];
                foreach ($articles as $item) {
                    $datas['tableBodies'][] = [
                        'id' => $item->id,
                        'judul' => $item->title,
                        'author' => $item->author->author,
                        'tanggalPelaksanaan' => $item->date,
                        'tanggalPosting' => $item->created_at->format('d F Y H:i'),
                    ];
                }
            break;
            case 'review':
                $datas['tableHeads'] = ['No','Nama', 'Kalimat Testimoni', 'Tanggal Posting', 'Aksi'];
                foreach ($articles as $item) {
                    $datas['tableBodies'][] = [
                        'id' => $item->id,
                        'judul' => $item->title,
                        'author' => $item->author->author,
                        'tanggalPelaksanaan' => $item->date,
                        'tanggalPosting' => $item->created_at->format('d F Y H:i'),
                    ];
                }
            break;
            case 'categories':
                $datas['tableHeads'] = ['No', 'Kategori', 'Dibuat Pada','Aksi'];
                $datas['title'] = 'Kategori';
                $categories = Category::all();
                foreach ($categories as $item) {
                    $datas['tableBodies'][] = [
                        'id' => $item->id,
                        'category' => $item->category,
                        'tanggalPosting' => $item->created_at->format('d F Y H:i'),
                    ];


                }
                break;
            default:
                return view('errors.404');
                break;
        }
        return view('backend.pages.Table.index', $datas);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create($articleType)
    {
        // $title = Category::where('slug', $articleType)->pluck('category')->first();
        // dd($title);
        $datas = [
            'title' => Category::where('slug', $articleType)->pluck('category')->first()
        ];
        switch ($articleType) {
            case 'berita':
                return view('backend.pages.News.add-article', $datas);
                break;
            case 'kegiatan':
                return view('backend.pages.Kegiatan.add-kegiatan', $datas);
                break;
            case 'event':
                return view('backend.pages.Event.add-event', $datas);
                break;
            case 'pengumuman':
                return view('backend.pages.Attention.add-attention', $datas);
                break;
            case 'dosen':
                return view('backend.pages.Dosen.add-dosen', $datas);
                break;
            case 'review':
                return view('backend.pages.Review.add-review', $datas);
                break;
            default:
            return response(404);
            break;
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

        $validators = Validator::make(
            $data,
            [
                'title' => 'required',
                'slug' => 'required',
                'body' => 'required',
                'excerpt' => 'required',
                'thumbnail' => 'required|image|file|max:5000',
                'categoryId' => 'required',
            ],
            $messages = [
                'body.required' => 'Input Isi Artikel tidak boleh kosong, periksa kembali',
                'thumbnail.required' => 'Thumbnail wajib diisi',
            ],
        );

        if ($validators->fails()) {
            return back()->with('errors', $validators->errors());
        }

        $validated = $validators->validated();
        $validated['userId'] = auth()->user()->id;
        $validated['thumbnail'] = 'thumbnails' . '/' . time() . '_' . $request->file('thumbnail')->getClientOriginalName();
        $request->file('thumbnail')->storeAs('public/', $validated['thumbnail']);

        Post::create($validated, []);

        return redirect('/backend/berita/list')->with('success', 'Artikel / Postingan berhasil di Upload');
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('file')) {
            //get filename with extension
            $filenamewithextension = $request->file('file')->getClientOriginalName();

            //get filename without extension
            $filename = $filenamewithextension;

            //get file extension
            $extension = $request->file('file')->getClientOriginalExtension();

            //filename to store
            $filenametostore = time() . '.' . $extension;

            //Upload File
            $request->file('file')->storeAs('public/uploads', $filenametostore);

            // you can save image path below in database
            $path = asset('storage/uploads/' . $filenametostore);

            echo $path;
            exit();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post, $articleType, $id)
    {
        $article = Post::find($id);
        $datas = [
            'title' => 'Article',
            'article' => $article,
        ];
        switch ($articleType) {
            case 'articles':
                return view('backend.pages.edit-article', $datas);
                break;
            case 'category':
                return view('backend.pages.edit-category', $datas);
                break;
            case 'events':
                return view('backend.pages.edit-event', $datas);
                break;
            case 'attentions':
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
