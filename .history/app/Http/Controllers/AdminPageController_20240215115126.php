<?php

namespace App\Http\Controllers;

class AdminPageController extends Controller
{
    /**
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */
    public function index(string $page)
    {
        if (view()->exists("pages.{$page}")) {
            return view("pages.{$page}");
        }

        return abort(404);
    }

    public function beranda()
    {
        $allPostingan = Postingan::orderBy('id', 'DESC')->paginate(4);
        return view("pages.beranda")->with(['allPostingan' => $allPostingan]);
        // return view('pages.beranda');
    }

    public function profil()
    {
        return view("pages.profil");
    }

    // public function kegiatan()
    // {
    //     $kegiatan = Kegiatan::get();
    //     return view("pages.kegiatan")->with('kegiatan', $kegiatan);;
    // }

    // public function galeriFoto()

    // public function prestasi()
    // {
    //     $prestasi = Prestasi::get();
    //     return view("pages.prestasi")->with('prestasi', $prestasi);;
    // }

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

    public function talent()
    {
        // $allTalent = talent::orderBy('id','asc')->paginate(4);
        // return view("pages.talent")->with('allTalent', $allTalent);

        // $katalogtalenta = katalogtalenta::get();
        // return view("pages.katalogtalenta")->with('katalogtalenta', $katalogtalenta);

        $KatalogTalenta = KatalogTalenta::orderBy('id', 'asc')->paginate(4);
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
        $allPostingan = Postingan::orderBy('id', 'DESC')->paginate(4);
        return view('pages.berita')->with(['allPostingan' => $allPostingan, 'allCategory' => $allCategory]);
    }

    public function beritabykategori()
    {
        // $allCategory = KategoriPostingan::orderBy('name', 'ASC')->get();
        // $allPostingan = Postingan::where('kategori_postingan_id', $id)->get();
        // return view('pages.berita')->with(['allPostingan'=> $allPostingan, 'allCategory' => $allCategory]);

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

    public function singleBerita()
    {
        $allPostingan = Postingan::get();
        return view('pages.singleBerita')->with(['allPostingan' => $allPostingan]);
    }
}
