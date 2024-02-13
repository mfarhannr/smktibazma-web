<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use File;

class SiswaController extends Controller
{
    public function index()
    {
        $Siswa = Siswa::get();
        return view('admin-pages.siswa.index', ['Siswa' => $Siswa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-pages.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png',
            'name' => 'required',
            'bidang' => 'required',
        ]);

        $fileName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('img'), $fileName);

        $Siswa = new Siswa;

        $Siswa->name = $request->name;
        $Siswa->gambar = $fileName;
        $Siswa->bidang = $request->bidang;
        $Siswa->instagram = $request->instagram;
        $Siswa->linkedin = $request->linkedin;
        $Siswa->github = $request->github;
        $Siswa->nomor = $request->nomor;
        $Siswa->deskripsi = $request->deskripsi;
        $Siswa->email = $request->email;



        $Siswa->save();

        return redirect('/admin-Siswa');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Siswa = Siswa::find($id);
        return view('pages.singleTalent')->with(['Siswa' => $Siswa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Siswa = Siswa::find($id);
        return view('admin-pages.siswa.update')->with(['Siswa' => $Siswa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png',
            'name' => 'required',
            'bidang' => 'required',
            'instagram' => 'required',
            'linkedin' => 'required',
            'github' => 'required',
            'nomor' => 'required',
            'deskripsi' => 'required',
            'email' => 'required',
        ]);



        $Siswa = Siswa::find($id);

        if ($request->has('gambar')) {
            $path = 'img/';
            File::delete($path . $Siswa->gambar);

            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('img'), $fileName);

            $Siswa->gambar = $fileName;
            $Siswa->save();
        }
        $Siswa->name = $request->name;
        $Siswa->bidang = $request->bidang;
        $Siswa->instagram = $request->instagram;
        $Siswa->linkedin = $request->linkedin;
        $Siswa->github = $request->github;
        $Siswa->nomor = $request->nomor;
        $Siswa->deskripsi = $request->deskripsi;
        $Siswa->email = $request->email;


        // $Siswa->judul = $request['judul'];
        // $Siswa->deskripsi = $request['deskripsi'];
        $Siswa->save();

        return redirect('/admin-Siswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Siswa = Siswa::find($id);

        $path = 'img/';
        File::delete($path . $Siswa->gambar);

        $Siswa->delete();

        return redirect('/admin-Siswa');
    }
}
