<?php

namespace App\Http\Controllers;

use App\Models\talent;
use App\Models\PPDB;
use App\Models\KategoriPostingan;
use App\Models\Postingan;
use App\Models\KatalogTalenta;
use App\Models\Kegiatan;
use App\Models\Prestasi;

class PageController extends Controller
{
    /**
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */
    // public function index(string $page)
    // {
    //     if (view()->exists("pages.{$page}")) {
    //         return view("pages.{$page}");
    //     }

    //     return abort(404);
    // }

    public function beranda()
    {
        $allPostingan = Postingan::orderBy('id', 'DESC')->paginate(4);
        return view("pages.beranda")->with(['allPostingan'=> $allPostingan]);
    }

    public function profil()
    {
        return view("pages.profil");
    }

    public function kegiatan()
    {
        $kegiatan = Kegiatan::get();
        return view("pages.kegiatan")->with('kegiatan', $kegiatan);;
    }

    public function prestasi()
    {
        $prestasi = Prestasi::get();
        return view("pages.prestasi")->with('prestasi', $prestasi);;
    }

    public function galeri()
    {
        return view("pages.galeri");
    }
    public function talent()
    {

        // $allTalent = talent::orderBy('id','asc')->paginate(4);
        // return view("pages.talent")->with('allTalent', $allTalent);

        // $katalogtalenta = katalogtalenta::get();
        // return view("pages.katalogtalenta")->with('katalogtalenta', $katalogtalenta);

        $KatalogTalenta = KatalogTalenta::orderBy('id','asc')->paginate(4);
        return view("pages.talent")->with(['KatalogTalenta' => $KatalogTalenta]);

    }

    public function team()
    {
        return view("pages.team");
    }

    public function donasi()
    {
        return view("pages.donasi");
    }

    public function ppdb()
    {
        $ppdb = PPDB::get();
        return view("pages.ppdb")->with('ppdb', $ppdb);
    }

    public function mitra()
    {
        return view("pages.mitra");
    }

    public function berita()
    {
        $allCategory = KategoriPostingan::orderBy('name', 'ASC')->get();
        $allPostingan = Postingan::orderBy('id', 'DESC')->get();
        return view('pages.berita')->with(['allPostingan'=> $allPostingan, 'allCategory' => $allCategory]);
    }

    public function beritabykategori($id)
    {
        $allCategory = KategoriPostingan::orderBy('name', 'ASC')->get();
        $allPostingan = Postingan::where('kategori_postingan_id', $id)->get();
        return view('pages.berita')->with(['allPostingan'=> $allPostingan, 'allCategory' => $allCategory]);
    }
    public function singleBerita()
    {
        $allPostingan = Postingan::get();
        return view('pages.singleBerita')->with(['allPostingan'=> $allPostingan]);
    }
}
