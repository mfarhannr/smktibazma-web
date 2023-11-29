<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        return view('admin-pages.user-managements.show');
    }

    public function create()
    {
        return view('admin-pages.user-managements.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email
        ]);

        return redirect('/user-management');
}
}