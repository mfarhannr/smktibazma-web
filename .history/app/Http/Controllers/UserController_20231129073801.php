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
        return view('admin-pages.user-managements.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required|email|max:255|unique:users,email,
            'password' => 'required',
            'role' => 'required'
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role
        ]);

        return redirect()->to('/admin-management')->with('success', 'Admin berhasil ditambahkan');
    }

    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->to('/admin-management')->with('success', 'Admin berhasil dihapus');
    }
}
