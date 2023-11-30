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
        $kegiata = Portfolio::get();
        return view('admin-pages.portfolio.index', ['kegiata' => $kegiata]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-pages.portfolio.create');
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

        $kegiata = new Portfolio;

        $kegiata->judul = $request->judul;
        $kegiata->deskripsi = $request->deskripsi;
        $kegiata->gambar = $fileName;

        $kegiata->save();

        return redirect('/portfolio');
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
        $kegiata = Portfolio::find($id);
        return view('admin-pages.portfolio.update', compact('kegiata'));
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



        $kegiata = Portfolio::find($id);

        if ($request->has('gambar')) {
            $path = 'img/';
            File::delete($path . $kegiata->gambar);

            $fileName = time() . '_' . $request->gambar->extension();
            $request->gambar->move(public_path('img'), $fileName);

            $kegiata->gambar = $fileName;
            $kegiata->save();
        }

        $kegiata->judul = $request['judul'];
        $kegiata->deskripsi = $request['deskripsi'];
        $kegiata->save();

        return redirect('/portfolio');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kegiata = Portfolio::find($id);

        $path = 'img/';
        File::delete($path . $kegiata->gambar);

        $kegiata->delete();

        return redirect('/portfolio');
    }
}
