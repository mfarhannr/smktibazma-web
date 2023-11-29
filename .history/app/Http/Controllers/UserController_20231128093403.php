<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        $allAdmin = User::get();
        return view('admin-pages.user-managements.index', ['allAdmin' => $allAdmin]);
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

        return redirect('/admin-management');
    }
    public function destroy(string $id)
    {
        $allAdmins = User::find($id);
        $allAdmins->delete();

        return redirect('/admin-management');
    }
}
