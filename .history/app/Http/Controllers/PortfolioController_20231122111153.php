<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use File;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::get();
        return view('admin-pages.portfolio.index', ['portfolios' => $portfolios]);
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

        $portfolios = new Portfolio;

        $portfolios->judul = $request->judul;
        $portfolios->deskripsi = $request->deskripsi;
        $portfolios->gambar = $fileName;

        $portfolios->save();

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
        $portfolios = Portfolio::find($id);
        return view('admin-pages.portfolio.edit', compact('portfolios'));
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

        

        $portfolios = Portfolio::find($id);

        if($request->has('gambar')){
            $path = 'img/';
            File::delete($path. $portfolios->gambar);

            $fileName = time() . '_' . $request->gambar->extension();
            $request->gambar->move(public_path('img'), $fileName);

            $portfolios->gambar = $fileName;
        }

        $portfolios->judul = $request->judul;
        $portfolios->deskripsi = $request->deskripsi;
        $portfolios->gambar = $fileName;
        $portfolios->update();
        return redirect('/portfolio');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolios = Portfolio::find($id);
        $portfolios->delete();
        return redirect('/portfolio');
    }
}
