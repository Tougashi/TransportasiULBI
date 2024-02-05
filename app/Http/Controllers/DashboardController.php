<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.home', [
            'title' => 'Dashboard',
            'countPosts' => Post::all()->count(),
            'categories' => Category::all(),
            'countAuthors' => User::all()->count(),
            'countViewers' => Post::sum('views')
        ]);
    }

}
