<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home', [
            'title' => 'Home',
            'description' => 'Halaman utama aplikasi Pixora Studio yang sekarang dipetakan ke Laravel.',
        ]);
    }

    public function about(): View
    {
        return view('pages.about', [
            'title' => 'About',
            'description' => 'Halaman tentang layanan dan profil Pixora Studio.',
        ]);
    }

    public function project(): View
    {
        return view('pages.project', [
            'title' => 'Project',
            'description' => 'Halaman portofolio dan proyek fotografi produk.',
        ]);
    }

    public function contact(): View
    {
        return view('pages.contact', [
            'title' => 'Contact',
            'description' => 'Halaman kontak untuk memesan layanan dan meminta penawaran.',
        ]);
    }
}
