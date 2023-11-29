<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        $USER = User::get();
        return view('admin-pages.user-managements.index', ['USER' => $USER]);
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
            'role' => 'required'
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
        ]);

        return redirect()->to('/admin-management')->with('success', 'Admin berhasil ditambahkan');
    }

    public function destroy(string $id)
    {
        $USER = User::find($id);
        $USER->delete();

        return redirect()->to('/admin-management')->with('success', 'Admin berhasil dihapus');
    }
}
