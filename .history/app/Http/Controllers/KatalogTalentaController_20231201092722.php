<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\KatalogTalenta;
use File;

class KatalogTalentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $KatalogTalenta = KatalogTalenta::get();
        return view('admin-pages.talenta.index', ['KatalogTalenta' => $KatalogTalenta]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-pages.talenta.create');

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
            'instagram' => 'required',
            'linkedin' => 'required',
            'github' => 'required',
            'nomor' => 'required',
            'deskripsi' => 'required',
            'email' => 'required',

        ]);

        $fileName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('img'), $fileName);

        $KatalogTalenta = new KatalogTalenta;

        $KatalogTalenta->name = $request->name;
        $KatalogTalenta->gambar = $fileName;
        $KatalogTalenta->bidang = $request->bidang;
        $KatalogTalenta->instagram = $request->instagram;
        $KatalogTalenta->linkedin = $request->linkedin;
        $KatalogTalenta->github = $request->github;
        $KatalogTalenta->nomor = $request->nomor;
        $KatalogTalenta->deskripsi = $request->deskripsi;
        $KatalogTalenta->email = $request->email;



        $KatalogTalenta->save();

        return redirect('/admin-atalogtalenta');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $KatalogTalenta = KatalogTalenta::find($id);
        return view('pages.singleTalent')->with(['KatalogTalenta' => $KatalogTalenta]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $KatalogTalenta = KatalogTalenta::find($id);
        return view('admin-pages.talenta.update')->with(['KatalogTalenta' => $KatalogTalenta]);
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



        $KatalogTalenta = KatalogTalenta::find($id);

        if($request->has('gambar')){
            $path = 'img/';
            File::delete($path. $KatalogTalenta->gambar);

            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('img'), $fileName);

            $KatalogTalenta->gambar = $fileName;
            $KatalogTalenta->save();

        }
        $KatalogTalenta->name = $request->name;
        $KatalogTalenta->bidang = $request->bidang;
        $KatalogTalenta->instagram = $request->instagram;
        $KatalogTalenta->linkedin = $request->linkedin;
        $KatalogTalenta->github = $request->github;
        $KatalogTalenta->nomor = $request->nomor;
        $KatalogTalenta->deskripsi = $request->deskripsi;
        $KatalogTalenta->email = $request->email;


        // $KatalogTalenta->judul = $request['judul'];
        // $KatalogTalenta->deskripsi = $request['deskripsi'];
        $KatalogTalenta->save();

        return redirect('/admin-atalogtalenta');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $KatalogTalenta = KatalogTalenta::find($id);

        $path = 'img/';
        File::delete($path . $KatalogTalenta->gambar);

        $KatalogTalenta->delete();

        return redirect('/admin-atalogtalenta');
    }
}
