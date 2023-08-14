<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtamaController extends Controller
{
    //Utama
    public function index()
    {
        return view('utama');
    }

    public function buku()
    {
        return view('buku');
    }

    public function katalog()
    {
        return view('katalog');
    }

    public function tentangkami()
    {
        return view('tentangkami');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function marketplace()
    {
        return view('marketplace');
    }

    public function company()
    {
        return view('company');
    }

    public function portofolio()
    {
        return view('portofolio');
    }

    public function lowongan()
    {
        return view('lowongan');
    }
}
