<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        $user = User::get();
        return view('admin-pages.user-managements.index', ['user' => $user]);
    }

    public function create()
    {
        return view('admin-pages.user-managements.create')->with('succes', 'Admin berhasil ditambahkan');;
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'username' => 'required|max:30|min:2',
            'email' => 'required|email|max:50|unique:users,email',
            'password' => 'required|min:5|max:30',
            'role' => 'required|max:5'
            
        ]);
        $user = User::create($attributes);
        auth()->login($user);

        return redirect()->to('/admin-management')->with('succes', 'Admin berhasil diupdate');
    }

    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->to('/admin-management')->with('success', 'Admin berhasil dihapus');
    }
}
