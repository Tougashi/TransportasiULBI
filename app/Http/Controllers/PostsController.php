<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.articles', [
            'title' => 'Articles',
            'articles' => Posts::where('categoryId',3)->get()
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
        return response()->json(['data' => $request->all()]);
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
