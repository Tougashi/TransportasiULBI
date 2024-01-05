<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.Auth.login', [
            'title' => 'Dashboard'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->flashOnly('username');
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }

        return back()->with('loginError', 'Username yang anda masukan salah');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user,Request $request)
    {
        if($request->ajax()){
            $request->session()->invalidate();
            $request->session()->regenerate();
            return response(200);
        }else{
            return response(400);
        }
    }
}
