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
    public $imagePath;
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
            'tableHeads' => ['No', 'Judul', 'Author', 'Views', 'Dibuat pada', ' '],
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
                $datas['tableHeads'] = ['No','Judul', 'Tanggal Pelaksanaan', 'Dibuat pada', ' '];
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
                $datas['tableHeads'] = ['No','Judul', 'Tanggal Pelaksanaan', 'Dibuat pada', ' '];
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
                $datas['tableHeads'] = ['No','Nama Dosen', 'Jabatan', 'Dibuat pada', ' '];
                foreach ($articles as $item) {
                    $datas['tableBodies'][] = [
                        'id' => $item->id,
                        'judul' => $item->title,
                        'body' => $item->body,
                        'tanggalPosting' => $item->created_at->format('d F Y H:i'),
                    ];
                }
            break;
            case 'review':
                $datas['tableHeads'] = ['No','Nama', 'Kalimat Testimoni', 'Dibuat pada', ' '];
                foreach ($articles as $item) {
                    $datas['tableBodies'][] = [
                        'id' => $item->id,
                        'judul' => $item->title,
                        'author' => $item->body,
                        'tanggalPosting' => $item->created_at->format('d F Y H:i'),
                    ];
                }
            break;
            case 'categories':
                $datas['tableHeads'] = ['No', 'Kategori', 'Dibuat Pada'];
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
            case 'himpunan':
                return view('backend.pages.himpunan.home', $datas);
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
        $data['categoryId'] = $categoryType->id;
        $data['excerpt'] = Str::limit(strip_tags($request->postBody), 200);
        $data['body'] = $request->postBody;
        $data['image'] = $request->bodyImage;


        $checkPost = Post::where('slug', $request->slug)->first();
        if(!empty($request->slug)){
            if(isset($checkPost)){
                $data['slug'] = $checkPost->slug.'-'.mt_rand(0000,9999);
            }
        }
        $rules = [
                'title' => 'nullable',
                'slug' => 'nullable',
                'body' => 'nullable',
                'excerpt' => 'nullable',
                'thumbnail' => 'nullable|image|file|max:5000',
                'image' => 'nullable',
                'date' => 'nullable',
                'categoryId' => 'required',
        ];

        if($articleType === 'dosen'){
            $rules['thumbnail'] = 'required|image|file|max:5000';
        }

        $validators = Validator::make(
            $data,$rules,
            [
                'body.required' => 'Input Isi Artikel tidak boleh kosong, periksa kembali',
                'thumbnail.required' => 'Tshumbnail wajib diisi',
            ]
        );

        if ($validators->fails()) {
            return back()->with('errors', $validators->errors());
        }

        $validated = $validators->validated();
        $validated['userId'] = auth()->user()->id;

        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = 'thumbnails/' . time() . '_' . $request->file('thumbnail')->getClientOriginalName();
            $request->file('thumbnail')->storeAs('public/', $thumbnailPath);
            $validated['thumbnail'] = $thumbnailPath;
        }

        Post::create($validated);

        return redirect('/admin/'.$categoryType->slug)->with('success', 'Artikel / Postingan berhasil di Upload');
    }
    public function uploadImage(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filenametostore = time() . '.' . $file->getClientOriginalExtension();
            $file->move(storage_path('app/public/uploads'), $filenametostore);
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
        $article = Post::find(decrypt($id));
        $datas = [
            'title' => 'Data',
            'article' => $article,
        ];
        switch ($articleType) {
            case 'berita':
                return view('backend.pages.news.edit-article', $datas);
                break;
            case 'kegiatan':
                return view('backend.pages.kegiatan.edit-kegiatan', $datas);
                break;
            case 'category':
                return view('backend.pages.category.edit-category', $datas);
                break;
            case 'event':
                return view('backend.pages.event.edit-event', $datas);
                break;
            case 'pengumuman':
                $datas['title'] = 'Pengumuman';
                return view('backend.pages.attention.edit-attention', $datas);
                break;
            case 'dosen':
                $datas['title'] = 'Dosen';
                return view('backend.pages.dosen.edit-dosen', $datas);
                break;
            case 'review':
                return view('backend.pages.review.edit-review', $datas);
                break;
            default:
                return response(404);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $articleType, Post $post, $id)
    {
        $currentPost = Post::where('id', decrypt($id))->first();
        $categoryType = Category::where('slug', $articleType)->first();
        $data = $request->all();
        $data['categoryId'] = $categoryType->id;
        $data['excerpt'] = Str::limit(strip_tags($request->postBody), 200);
        $data['body'] = $request->postBody;
        $data['image'] = $request->bodyImage;
        $host = url('/');

        $rules = [
                'title' => 'nullable',
                'slug' => 'nullable',
                'body' => 'nullable',
                'excerpt' => 'nullable',
                'thumbnail' => 'nullable|image|file|max:5000',
                'image' => 'nullable',
                'date' => 'nullable',
                'categoryId' => 'required',
        ];

        if($articleType === 'dosen'){
            $rules['thumbnail'] = 'required|image|file|max:5000';
        }

        $validators = Validator::make(
            $data,$rules,
            [
                'body.required' => 'Input Isi Artikel tidak boleh kosong, periksa kembali',
                'thumbnail.required' => 'Tshumbnail wajib diisi',
            ]
        );

        if ($validators->fails()) {
            return back()->with('errors', $validators->errors());
        }

        $validated = $validators->validated();
        $validated['userId'] = auth()->user()->id;

        if ($request->hasFile('thumbnail')) {
            Storage::delete('public/' . $currentPost->thumbnail);
            $thumbnailPath = 'thumbnails/' . time() . '_' . $request->file('thumbnail')->getClientOriginalName();
            $request->file('thumbnail')->storeAs('public/', $thumbnailPath);
            $validated['thumbnail'] = $thumbnailPath;
        }
        if ($request->has('bodyImage')) {
            $imagePaths = json_decode($currentPost->image, true);

            if (is_array($imagePaths)) {
                foreach ($imagePaths as $imagePath) {
                    if ($imagePath !== null) {
                        Storage::delete(str_replace($host . '/storage', 'public', $imagePath));
                    }
                }
            }
        }


        Post::where('id',decrypt($id))->update($validated);

        return redirect('/admin/'.$categoryType->slug)->with('success', 'Artikel / Postingan berhasil di Perbarui');
    }




    /**
     * Remove the specified resource from storage.
     */

     public function destroy($articleType, $id)
     {
        $host = url('/');
        $post = Post::find(decrypt($id));

        if ($post->thumbnail) {
             Storage::delete('public/' . $post->thumbnail);
         }
        if (!$post) {
            return back()->with('error', 'Data tidak ditemukan');
        }
        $imagePaths = json_decode($post->image, true);

        if ($imagePaths !== null) {
            foreach ($imagePaths as $imagePath) {
                if ($imagePath !== null) {
                    Storage::delete(str_replace($host.'/storage', 'public', $imagePath));
                }
            }
        }
         Post::destroy(decrypt($id));

         return back()->with('success', 'Data berhasil dihapus');
     }


}
