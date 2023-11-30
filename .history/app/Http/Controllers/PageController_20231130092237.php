<?php

namespace App\Http\Controllers;

use App\Models\talent;
use App\Models\PPDB;
// use App\Models\Katalogtalenta;

// use Illuminate\Http\Request;

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
        $katalogtalenta = katalogtalenta::get();
        // return view("pages.katalogtalenta")->with('katalogtalenta', $katalogtalenta);
        return view("pages.kegiatan");
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
        // $ppdb = PPDB::get();
        // return view("pages.ppdb")->with('ppdb', $ppdb);
    }

    public function mitra()
    {
        return view("pages.mitra");
    }

}
