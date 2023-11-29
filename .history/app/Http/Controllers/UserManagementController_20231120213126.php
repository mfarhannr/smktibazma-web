<?php

namespace App\Http\Controllers;

use App\Models\UserManagement;
// use App\Models\User;
use Illuminate\Http\Request;

class UserManagementController extends Controller
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
        // $data = request()->validate(
        //     [
        //         'username' => 'required|unique:users,username',
        //         'email' => 'required|unique',
        //         'role' => 'required',
        //         'password' => 'required'
        //     ],
        //     [
        //         'username.required' => 'Kategori Harus diisi',
        //         'username.unique' => 'Kategori telah tersedia ',
        //         'email.required' => 'Kategori Harus diisi',
        //         'role.required' => 'Kategori Harus diisi',
        //         'username.required' => 'Kategori Harus diisi',
        //     ]
        // );
        // UserManagement::create($data);
        $this->validate($request, [
            'username' => 'required|unique:users,username',
            'email' => 'required|unique:users,em'
        ]);

        UserManagement::create([
            'username' => $request->username,
            'email' => $request->email
        ]);

        return redirect('/post');
        return redirect()->to('/user-management')->with('success', 'User berhasil ditambahkan');
    }
}
