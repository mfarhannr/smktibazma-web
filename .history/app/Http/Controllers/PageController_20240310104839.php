<?php

namespace App\Http\Controllers;

use DB;
use App\Models\PPDB;
use App\Models\Galeri;
use App\Models\Postingan;
use App\Models\Organisasi;
use App\Models\KatalogTalenta;
use App\Models\KategoriGaleri;
use App\Models\KategoriPostingan;

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
        $allGallery = Galeri::orderBy('id', 'DESC')->paginate(4);
        return view("pages.beranda")->with(['allPostingan' => $allPostingan, 'allGallery' => $allGallery]);
    }

    public function profil()
    {
        return view("pages.profil");
    }

    public function galeri()
    {
        $allCategoryGallery = KategoriGaleri::orderBy('name', 'ASC')->get();
        $allGallery = Galeri::orderBy('id', 'DESC')->paginate(4);
        return view('pages.galeri')->with(['allCategoryGallery' => $allCategoryGallery, 'allGallery' => $allGallery]);
    }

    public function galeribykategori()
    {
        $galeriF = Galeri::orderBy('created_at', 'desc')
            ->where('kategori_galeri_id', 2)
            ->take(4)
            ->get();

        $galeriB = Galeri::orderBy('created_at', 'desc')
            ->where('kategori_galeri_id', 3)
            ->take(4)
            ->get();

        $galeriP = Galeri::orderBy('created_at', 'desc')
            ->where('kategori_galeri_id', 4)
            ->take(4)
            ->get();

        $galeriE = Galeri::orderBy('created_at', 'desc')
            ->where('kategori_galeri_id', 5)
            ->take(4)
            ->get();

        $galeriC = Galeri::orderBy('created_at', 'desc')
            ->where('kategori_galeri_id', 6)
            ->take(4)
            ->get();

        $galeriT = Galeri::orderBy('created_at', 'desc')
            ->where('kategori_galeri_id', 7)
            ->take(4)
            ->get();

        return view('pages.galeri', [
            'galeriFutsal' => $galeriF,
            'galeriBadminton' => $galeriB,
            'galeriPencakSilat' => $galeriP,
            'galeriEsport' => $galeriE,
            'galeriClassMeeting' => $galeriC,
            'galeriTahfidz' => $galeriT
        ]);
    }

    public function singleGaleriF()
    {
        $galeriF = Galeri::orderBy('created_at', 'desc')
            ->where('kategori_galeri_id', 2)
            ->get();

        return view('pages.singleGaleriF', [
            'galeriF' => $galeriF
        ]);
    }

    public function singleGaleriB()
    {
        $galeriB = Galeri::orderBy('created_at', 'desc')
            ->where('kategori_galeri_id', 3)
            ->get();

        return view('pages.singleGaleriB', [
            'galeriB' => $galeriB
        ]);
    }

    public function singleGaleriP()
    {
        $galeriP = Galeri::orderBy('created_at', 'desc')
            ->where('kategori_galeri_id', 4)
            ->get();

        return view('pages.singleGaleriP$galeriP', [
            'galeriP$galeriP' => $galeriP
        ]);
    }

    public function singleGaleriE()
    {
        $galeriE = Galeri::orderBy('created_at', 'desc')
            ->where('kategori_galeri_id', 5)
            ->get();

        return view('pages.singleGaleriE', [
            'galeriE' => $galeriE
        ]);
    }

    public function singleGaleriC()
    {
        $galeriC = Galeri::orderBy('created_at', 'desc')
            ->where('kategori_galeri_id', 6)
            ->get();

        return view('pages.singleGaleriC', [
            'galeriC' => $galeriC
        ]);
    }

    public function singleGaleriT()
    {
        $galeriT = Galeri::orderBy('created_at', 'desc')
            ->where('kategori_galeri_id', 7)
            ->get();

        return view('pages.singleGaleriT', [
            'galeriT' => $galeriT
        ]);
    }

    public function talent()
    {
        // $allTalent = talent::orderBy('id','asc')->paginate(4);
        // return view("pages.talent")->with('allTalent', $allTalent);

        // $katalogtalenta = katalogtalenta::get();
        // return view("pages.katalogtalenta")->with('katalogtalenta', $katalogtalenta);

        $KatalogTalenta = KatalogTalenta::orderBy('id', 'asc')->paginate(4);
        return view("pages.talent")->with(['KatalogTalenta' => $KatalogTalenta]);
    }

    public function singleTalent()
    {
        $organisasis = Organisasi::get();
        return view('pages.singleTalent')->with(['organisasis' => $organisasis]);
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
        return view("pages.ppdb");
    }

    public function mitra()
    {
        return view("pages.mitra");
    }

    public function berita()
    {
        $allCategory = KategoriPostingan::orderBy('name', 'ASC')->get();
        $allPostingan = Postingan::orderBy('id', 'DESC')->paginate(4);
        return view('pages.berita')->with(['allPostingan' => $allPostingan, 'allCategory' => $allCategory]);
    }

    public function beritabykategori()
    {
        $postinganK = Postingan::orderBy('created_at', 'desc')
            ->where('kategori_postingan_id', 1)
            ->take(4)
            ->get();

        $postinganP = Postingan::orderBy('created_at', 'desc')
            ->where('kategori_postingan_id', 2)
            ->take(4)
            ->get();

        $postinganL = Postingan::orderBy('created_at', 'desc')
            ->where('kategori_postingan_id', 3)
            ->take(4)
            ->get();

        return view('pages.berita', [
            'postinganKegiatan' => $postinganK,
            'postinganPrestasi' => $postinganP,
            'postinganLomba' => $postinganL
        ]);
    }

    public function singleBerita($id)
    {
        $allPostingan = Postingan::find($id);
        return view('pages.singleBerita')->with(['allPostingan' => $allPostingan]);
    }
}
