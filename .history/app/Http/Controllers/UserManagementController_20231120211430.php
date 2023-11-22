<?php

namespace App\Http\Controllers;

// use App\Models\UserManagement;
use App\Models\User;
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
        $data = request()->validate(
            [
                'username' => 'required|unique:users,username',
            ],
            [
                'name.required' => 'Kategori Harus diisi',
                'name.unique' => 'Kategori telah tersedia ',
            ]
        );
        UserManagement::create($data);
        return redirect()->to('/user-management')->with('success', 'User berhasil ditambahkan');
    }
}
