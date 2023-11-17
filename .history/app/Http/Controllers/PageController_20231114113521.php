<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
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
        return view("pages.talent");
    }

    public function team()
    {
        return view("pages.team");
    }

}
