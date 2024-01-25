
<?php

namespace App\Http\Controllers;

use App\Models\PPDB;
use Illuminate\Http\Request;
use File;

use App\Models\KategoriPostingan;
use Illuminate\Http\Request;
// namespace App\Http\Controllers;
namespace App\Http\Controllers;
use App\Models\PPDB;
use Illuminate\Http\Request;
use File;

class PPDBController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ppdb = PPDB::get();
        return view('admin-pages.ppdb.index', ['ppdb' => $ppdb]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-pages.ppdb.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png',
            'deskripsi' => 'required',
        ]);

        $fileName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('img'), $fileName);

        $ppdb = new ppdb;

        $ppdb->deskripsi = $request->deskripsi;
        $ppdb->gambar = $fileName;

        $ppdb->save();

        return redirect('/admin-ppdb');
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
    public function edit(string $id)
    {
        $ppdb = ppdb::find($id);
        return view('admin-pages.ppdb.update', compact('ppdb'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png',
            'deskripsi' => 'required',
        ]);



        $ppdb = ppdb::find($id);

        if ($request->has('gambar')) {
            $path = 'img/';
            File::delete($path . $ppdb->gambar);

            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('img'), $fileName);

            $ppdb->gambar = $fileName;
            $ppdb->save();
        }

        $ppdb->judul = $request['judul'];
        $ppdb->deskripsi = $request['deskripsi'];
        $ppdb->save();

        return redirect('/admin-ppdb');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ppdb = ppdb::find($id);

        $path = 'img/';
        File::delete($path . $ppdb->gambar);

        $ppdb->delete();

        return redirect('/admin-ppdb');
    }
}
