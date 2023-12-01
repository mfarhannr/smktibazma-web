<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestasi;
use File;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestasi = Prestasi::get();
        return view('admin-pages.prestasi.index', ['Prestasi' => $prestasi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-pages.prestasi.create');
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

        $prestasi = new Prestasi;

        $prestasi->judul = $request->judul;
        $prestasi->deskripsi = $request->deskripsi;
        $prestasi->gambar = $fileName;

        $prestasi->save();

        return redirect('/prestasi');
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
        $prestasi = Prestasi::find($id);
        return view('admin-pages.prestasi.update', compact('prestasi'));
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



        $prestasi = Prestasi::find($id);

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

        return redirect('/prestasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prestasi = Prestasi::find($id);

        $path = 'img/';
        File::delete($path . $prestasi->gambar);

        $prestasi->delete();

        return redirect('/Prestasi');
    }
}

