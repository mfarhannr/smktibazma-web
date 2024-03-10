<?php

namespace App\Http\Controllers;

use App\Models\KatalogTalenta;
use App\Models\Organisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $KatalogTalenta = KatalogTalenta::get();
        return view('admin-pages.organisasi.index', ['KatalogTalenta' => $KatalogTalenta]);
    }

    public function resume($id)
    {
        $Organisasi = Organisasi::select('organisasi.*', 'katalog_talenta.*')
            ->join('katalog_talenta', 'katalog_talenta.id', '=', 'organisasi.talent_id')
            ->get();
        return view('admin-pages.organisasi.resume', ['Organisasi' => $Organisasi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $talent = KatalogTalenta::get();
        return view('admin-pages.organisasi.create',  ['talent' => $talent]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'talent_id' => 'required',
        ]);

        $organisasi = new Organisasi;

        $organisasi->talent_id = $request->talent_id;
        $organisasi->nama_organisasi = $request->nama_organisasi;
        $organisasi->deskripsi_organisasi = $request->deskripsi_organisasi;
        $organisasi->tanggal_organisasi = $request->tanggal_organisasi;

        $organisasi->nama_prestasi = $request->nama_prestasi;
        $organisasi->deskripsi_prestasi = $request->deskripsi_prestasi;
        $organisasi->tanggal_prestasi = $request->tanggal_prestasi;

        $organisasi->nama_sertifikasi = $request->nama_sertifikasi;
        $organisasi->deskripsi_sertifikasi = $request->deskripsi_sertifikasi;
        $organisasi->tanggal_sertifikasi = $request->tanggal_sertifikasi;

        $organisasi->nama_pengalaman = $request->nama_pengalaman;
        $organisasi->deskripsi_pengalaman = $request->deskripsi_pengalaman;
        $organisasi->tanggal_pengalaman = $request->tanggal_pengalaman;

        $organisasi->save();

        return redirect('/admin-organisasi');
    }

    public function show($id)
    {
        $organisasi = Organisasi::find($id);
        return view('pages.singleTalent', compact('organisasi'));
    }
    /**
     * Display the specified resource.

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $organisasi = Organisasi::find($id);
        return view('admin-pages.organisasi.update', compact('organisasi'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'nama-organisasi' => 'required',
            'tanggal-organisasi' => 'required',
            'deskripsi-organisasi' => 'required',
            'nama-prestasi' => 'required',
            'tanggal-prestasi' => 'required',
            'deskripsi-prestasi' => 'required',
            'nama-sertifikasi' => 'required',
            'tanggal-sertifikasi' => 'required',
            'deskripsi-sertifikasi' => 'required',
            'nama-pengalaman' => 'required',
            'tanggal-pengalaman' => 'required',
            'deskripsi-pengalaman' => 'required',
        ]);



        $organisasi = Organisasi::find($id);

        if ($request->has('gambar')) {
            $path = 'img/';
            File::delete($path . $organisasi->gambar);

            // $fileName = time() . '_' . $request->gambar->extension();
            // $request->gambar->move(public_path('img'), $fileName);

            // $organisasi->gambar = $fileName;
            // $organisasi->save();

        }
        $organisasi->nama_organisasi = $request['nama'];
        $organisasi->deskripsi_organisasi = $request['deskripsi'];
        $organisasi->tanggal_organisasi = $request['tanggal'];
        $organisasi->nama_prestasi = $request['nama'];
        $organisasi->deskripsi_prestasi = $request['deskripsi'];
        $organisasi->tanggal_prestasi = $request['tanggal'];
        $organisasi->nama_sertifikasi = $request['nama'];
        $organisasi->deskripsi_sertifikasi = $request['deskripsi'];
        $organisasi->tanggal_sertifikasi = $request['tanggal'];
        $organisasi->nama_pengalaman = $request['nama'];
        $organisasi->deskripsi_pengalaman = $request['deskripsi'];
        $organisasi->tanggal_pengalaman = $request['tanggal'];

        $organisasi->save();

        return redirect('/admin-organisasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $organisasi = Organisasi::find($id);

        $path = 'img/';
        File::delete($path . $organisasi->gambar);

        $organisasi->delete();

        return redirect('/admin-organisasi');
    }  //
}
