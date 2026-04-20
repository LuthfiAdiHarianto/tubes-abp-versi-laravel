<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class UserController extends Controller
{
    public function profile(): View
    {
        return view('user.profile', [
            'title' => 'User Profile',
            'description' => 'Halaman profil pengguna untuk melihat dan mengedit data pribadi.',
        ]);
    }

    public function orders(): View
    {
        return view('user.orders', [
            'title' => 'User Orders',
            'description' => 'Halaman pesanan pengguna untuk melihat status dan riwayat order.',
        ]);
    }
}
