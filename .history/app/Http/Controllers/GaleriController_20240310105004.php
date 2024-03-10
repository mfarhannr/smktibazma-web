<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriGaleri;
use App\Models\Galeri;
use Illuminate\Support\Facades\File;


class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function galeri()
    {
        $allGallery = Galeri::get();
        $allCategoryGallery = KategoriGaleri::get();
        return view('admin-pages.create-galeri')->with(['allGallery' => $allGallery, 'allCategoryGallery' => $allCategoryGallery]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'image' => 'required|image|mimes:jpg,jpeg,png',
                'kategori_galeri_id' => 'required',
            ]
        );

        $fileName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('img'), $fileName);

        $allGallery = new Galeri;

        $allGallery->image                       = $fileName;
        $allGallery->kategori_galeri_id          = $request->kategori_galeri_id;

        $allGallery->save();

        return redirect()->to('/create-galeri')->with('succes', 'Foto Berhasil Dibuat');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Request $request)
    {
        $request->validate(
            [
                'image' => 'required|image|mimes:jpg,jpeg,png',
                'kategori_galeri_id' => 'required',
            ]
        );

        $allGallery = Galeri::find($id);

        if ($request->has('gambar')) {
            $path = 'img/';
            File::delete($path . $allGallery->gambar);

            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('img'), $fileName);

            $allGallery->image = $fileName;
            $allGallery->save();
        }

        $allGallery->image                       = $fileName;
        $allGallery->kategori_galeri_id          = $request->kategori_galeri_id;

        $allGallery->save();

        return redirect()->to('/create-galeri')->with('succes', 'Foto Berhasil Diupdate');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $allGallery = Galeri::find($id);
        return view('pages.singleGaleri', ['allGallery' => $allGallery]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $allGallery = Galeri::findOrFail($id);

        $path = 'img/';
        File::delete($path . $allGallery->image);

        $allGallery->delete();

        return redirect()->to('/create-galeri')->with('succes', 'Foto Berhasil Dihapus');
    }
}
