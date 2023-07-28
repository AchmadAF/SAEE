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
}
