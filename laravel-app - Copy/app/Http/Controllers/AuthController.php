<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AuthController extends Controller
{
    public function login(): View
    {
        return view('auth.login', [
            'title' => 'Login',
            'description' => 'Halaman login untuk pengguna yang ingin masuk ke aplikasi.',
        ]);
    }

    public function signup(): View
    {
        return view('auth.signup', [
            'title' => 'Signup',
            'description' => 'Halaman pendaftaran pengguna baru.',
        ]);
    }

    public function forgotPassword(): View
    {
        return view('auth.forgot-password', [
            'title' => 'Forgot Password',
            'description' => 'Halaman untuk meminta tautan reset kata sandi.',
        ]);
    }

    public function resetPassword(): View
    {
        return view('auth.reset-password', [
            'title' => 'Reset Password',
            'description' => 'Halaman reset kata sandi setelah menerima tautan email.',
        ]);
    }

    public function callback(): View
    {
        return view('auth.callback', [
            'title' => 'Auth Callback',
            'description' => 'Rute callback untuk autentikasi pihak ketiga atau OAuth.',
        ]);
    }
}
