<?php

namespace App\Http\Controllers;

use App\Models\KategoriPostingan;
use Illuminate\Http\Request;

class KategoriPostinganContoller extends Controller
{
    public function KategoriPostingan()
    {
        $allCategory = KategoriPostingan::get();
        return view('admin-pages.kategori-postingan')->with('allCategory', $allCategory);
    }
    public function store(Request $request)
    {
        $data = request()->validate(
            [
                'name' => 'required|unique:kategori_postingan,name'
            ]
        );
        KategoriPostingan::create($data);
        return redirect()->to('/admin-kategori-postingan')->with('succes','Kategori berhasil ditambahkan');
    }
    public function destroy($id)
    {
        KategoriPostingan::findOrFail($id)->delete();
        return redirect()->to('/admin-kategori-postingan')->with('succes','Kategori berhasil dihapus');
    }
    public function show($id)
    {
        $allCategory = KategoriPostingan::find($id);
        return view('pages.berita', ['allCategory' => $allCategory]);
    }
}
