<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestasi;
use File;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestasi = Kegiatan::get();
        return view('admin-pages.kegiatan.index', ['kegiatan' => $prestasi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-pages.kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png',
            'deskripsi' => 'required',
        ]);

        $fileName = time() . '_' . $request->gambar->extension();
        $request->gambar->move(public_path('img'), $fileName);

        $prestasi = new Kegiatan;

        $prestasi->judul = $request->judul;
        $prestasi->deskripsi = $request->deskripsi;
        $prestasi->gambar = $fileName;

        $prestasi->save();

        return redirect('/kegiatan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $prestasi = Kegiatan::find($id);
        return view('admin-pages.kegiatan.update', compact('kegiatan'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png',
            'deskripsi' => 'required',
        ]);



        $prestasi = Kegiatan::find($id);

        if ($request->has('gambar')) {
            $path = 'img/';
            File::delete($path . $prestasi->gambar);

            $fileName = time() . '_' . $request->gambar->extension();
            $request->gambar->move(public_path('img'), $fileName);

            $prestasi->gambar = $fileName;
            $prestasi->save();
        }

        $prestasi->judul = $request['judul'];
        $prestasi->deskripsi = $request['deskripsi'];
        $prestasi->save();

        return redirect('/kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prestasi = Kegiatan::find($id);

        $path = 'img/';
        File::delete($path . $prestasi->gambar);

        $prestasi->delete();

        return redirect('/kegiatan');
    }
}

