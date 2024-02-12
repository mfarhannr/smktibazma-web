<?php

namespace App\Http\Controllers;

use App\Models\KategoriGaleri;
use Illuminate\Http\Request;

class KategoriGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function KategoriGaleri()
    {
        $allCategoryGallery = KategoriGaleri::get();
        return view('admin-pages.kategori-galeri')->with('allCategoryGallery', $allCategoryGallery);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate(
            [
                'name' => 'required|unique:kategori_galeri,name'
            ]
        );
        KategoriGaleri::create($data);
        return redirect()->to('/kategori-galeri')->with('succes','Kategori berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $allCategoryGallery = KategoriGaleri::find($id);
        return view('pages.galeri', ['allCategoryGallery' => $allCategoryGallery]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        KategoriGaleri::findOrFail($id)->delete();
        return redirect()->to('/kategori-galeri')->with('succes','Kategori berhasil dihapus');
    }
}
