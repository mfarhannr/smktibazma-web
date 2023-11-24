<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

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

        $portfolio = new Portfolio;

        $portfolio->judul = $request->judul;
        $portfolio->deskripsi = $request->deskripsi;
        $portfolio->gambar = $fileName;

        $portfolio->save();

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
        return view('admin-pages.', compact('post'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required|unique:post',
            'body' => 'required',
        ]);

        $post = post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->update();
        return redirect('/post');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}