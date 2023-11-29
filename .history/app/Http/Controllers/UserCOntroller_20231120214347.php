<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function create()
    {
        return view('admin-pages.user-managements.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required'
        ]);

        Post::create([
            'username' => $request->title,
            'email' => $request->body
        ]);

        return redirect('/post');
}
