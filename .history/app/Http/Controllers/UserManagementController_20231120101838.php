<?php

namespace App\Http\Controllers;

use App\Models\UserManagement;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function index()
    {
        $user-management
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
                'name' => 'required|unique:user_management,name',
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
