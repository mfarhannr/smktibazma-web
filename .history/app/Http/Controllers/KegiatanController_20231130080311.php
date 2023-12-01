<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use File;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatan = Kegiatan::get();
        return view('admin-pages.Kegiatan.index', ['kegiatan' => $kegiatan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-pages.Kegiatan.create');
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

        $kegiatan = new Kegiatan;

        $kegiatan->judul = $request->judul;
        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->gambar = $fileName;

        $kegiatan->save();

        return redirect('/Kegiatan');
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
        $kegiatan = Kegiatan::find($id);
        return view('admin-pages.Kegiatan.update', compact('kegiatan'));
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



        $kegiatan = Kegiatan::find($id);

        if ($request->has('gambar')) {
            $path = 'img/';
            File::delete($path . $kegiatan->gambar);

            $fileName = time() . '_' . $request->gambar->extension();
            $request->gambar->move(public_path('img'), $fileName);

            $kegiatan->gambar = $fileName;
            $kegiatan->save();
        }

        $kegiatan->judul = $request['judul'];
        $kegiatan->deskripsi = $request['deskripsi'];
        $kegiatan->save();

        return redirect('/Kegiatan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kegiatan = Kegiatan::find($id);

        $path = 'img/';
        File::delete($path . $kegiatan->gambar);

        $kegiatan->delete();

        return redirect('/Kegiatan');
    }
}
