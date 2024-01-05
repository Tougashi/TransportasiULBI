<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.Author.list', [
            'title' => 'User',
            'authors' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.Author.add-author', [
            'title' => 'User'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $checkUser = User::where('username', $request->username)->first();

        if(isset($checkUser)){
            $data['username'] = $request->username.mt_rand(0000,9999);
        }

        $data['password'] = bcrypt($request->password);

        $validator = Validator::make($data, [
            'email' => 'required|email:rfc',
            'author' => 'required',
            'username' => 'required',
            'password' => 'required',
            'profilePhoto' => 'file|image|required|max:5000'
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->errors());
        }

        $validated = $validator->validated();

        if ($request->hasFile('profilePhoto')) {
            $thumbnailPath = 'profilePhoto/' . time() . '_' . $request->file('profilePhoto')->getClientOriginalName();
            $request->file('profilePhoto')->storeAs('public/', $thumbnailPath);
            $validated['profilePhoto'] = $thumbnailPath;
        }


        User::create($validated);

        return redirect('/admin/user/author/list')->with('success', 'Data User berhasil diperbarui');

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user, $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user, $id)
    {
        return view('backend.pages.Author.edit-author', [
            'title' => 'User',
            'data' => User::where('id', decrypt($id))->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user, $id)
    {
        $data = $request->all();
        $checkUser = User::where('username', $data['username'])->whereNot('id',decrypt($id))->first();

        if(isset($checkUser)){
            $data['username'] = $request->username.mt_rand(0000,9999);
        }

        $data['password'] = bcrypt($request->password);


        $validator = Validator::make($data, [
            'email' => 'required|email:rfc',
            'author' => 'required',
            'username' => 'required',
            'password' => 'required|min:8',
            'profilePhoto' => 'file|image|required|max:5000'
        ]);

        if ($validator->fails()) {
            return back()->with('errors', $validator->errors());
        }

        $validated = $validator->validated();

        if ($request->hasFile('profilePhoto')) {
            $thumbnailPath = 'profilePhoto/' . time() . '_' . $request->file('profilePhoto')->getClientOriginalName();
            $request->file('profilePhoto')->storeAs('public/', $thumbnailPath);
            $validated['profilePhoto'] = $thumbnailPath;
        }


        User::where('id',decrypt($id))->update($validated);

        return redirect('/admin/user/author/list')->with('success', 'Data User berhasil dibuat');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
