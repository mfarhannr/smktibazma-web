<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use Illuminate\Http\Request;
use App\Models\KategoriPostingan;
use Illuminate\Support\Facades\File;

class PostinganController extends Controller
{
    public function postingan()
    {
        $allPostingan = Postingan::get();
        $allCategory = KategoriPostingan::get();
        return view('admin-pages.create-postingan')->with(['allPostingan' => $allPostingan, 'allCategory' => $allCategory]);
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'kategori_postingan_id' => 'required',
                'image' => 'required|image|mimes:jpg,jpeg,png',
                'deskripsi' => 'required',
            ]
        );

        $fileName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('img'), $fileName);

        $allPostingan = new Postingan;

        $allPostingan->name                        = $request->name;
        $allPostingan->kategori_postingan_id       = $request->kategori_postingan_id;
        $allPostingan->image                       = $fileName;
        $allPostingan->deskripsi                   = $request->deskripsi;

        $allPostingan->save();

        return redirect()->to('/create-postingan')->with('succes', 'Postingan Berhasil Dibuat');
    }
    public function edit($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'kategori_postingan_id' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png',
            'deskripsi' => 'required',
        ]);

        $allPostingan = Postingan::find($id);

        if ($request->has('gambar')) {
            $path = 'img/';
            File::delete($path . $allPostingan->gambar);

            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('img'), $fileName);

            $allPostingan->image = $fileName;
            $allPostingan->save();
        }

        $allPostingan->name                        = $request->name;
        $allPostingan->kategori_postingan_id       = $request->kategori_postingan_id;
        $allPostingan->image                       = $fileName;
        $allPostingan->deskripsi                   = $request->deskripsi;

        $allPostingan->save();

        return redirect()->to('/create-postingan')->with('succes', 'Postingan Berhasil Diupdate');
        return redirect(route('ad'))
    }
    public function show($id)
    {
        $allPostingan = Postingan::find($id);
        return view('pages.singleBerita', ['allPostingan' => $allPostingan]);
    }
    public function destroy($id)
    {
        $allPostingan = Postingan::findOrFail($id);

        $path = 'img/';
        File::delete($path . $allPostingan->image);

        $allPostingan->delete();

        return redirect()->to('/create-postingan')->with('succes', 'Postingan Berhasil Dihapus');
    }
}
