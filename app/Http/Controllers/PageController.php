<?php

namespace App\Http\Controllers;

use App\Models\talent;
use App\Models\PPDB;
use App\Models\Katalogtalenta;

use Illuminate\Http\Request;

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
        return view("pages.beranda");
    }

    public function profil()
    {
        return view("pages.profil");
    }

    public function kegiatan()
    {
        return view("pages.kegiatan");
    }
    public function galeri()
    {
        return view("pages.galeri");
    }
    public function talent()
    {
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

}
