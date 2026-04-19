<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        return view('admin.index', [
            'title' => 'Admin Dashboard',
            'description' => 'Halaman dashboard admin untuk mengelola laporan, paket, pesanan, dan pengaturan.',
        ]);
    }

    public function laporan(): View
    {
        return view('admin.laporan', [
            'title' => 'Admin Laporan',
            'description' => 'Halaman laporan untuk melihat ringkasan penjualan dan performa.',
        ]);
    }

    public function notifikasi(): View
    {
        return view('admin.notifikasi', [
            'title' => 'Admin Notifikasi',
            'description' => 'Halaman notifikasi admin untuk pesan dan status pesanan.',
        ]);
    }

    public function paket(): View
    {
        return view('admin.paket', [
            'title' => 'Admin Paket',
            'description' => 'Halaman paket harga dan penawaran layanan.',
        ]);
    }

    public function pesanan(): View
    {
        return view('admin.pesanan', [
            'title' => 'Admin Pesanan',
            'description' => 'Halaman daftar pesanan pelanggan.',
        ]);
    }

    public function pesananDetail(string $id): View
    {
        return view('admin.pesanan-detail', [
            'title' => "Admin Pesanan #{$id}",
            'description' => "Detail pesanan dengan ID {$id}.",
            'id' => $id,
        ]);
    }

    public function setting(): View
    {
        return view('admin.setting', [
            'title' => 'Admin Setting',
            'description' => 'Halaman pengaturan admin untuk konfigurasi aplikasi dan profil.',
        ]);
    }
}
