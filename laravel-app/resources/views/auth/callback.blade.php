@extends('layouts.app')

@section('content')
    <section class="py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto text-center">
            <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-12">
                <div class="w-16 h-16 bg-blue-100 dark:bg-blue-900 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-3xl">🔐</span>
                </div>
                <h1 class="text-3xl font-bold text-slate-900 dark:text-white mb-4">Auth Callback</h1>
                <p class="text-slate-600 dark:text-slate-400 mb-6">
                    Rute callback sedang memproses respons autentikasi dari penyedia OAuth atau layanan pihak ketiga.
                </p>
                <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg p-4 text-left">
                    <p class="text-sm text-blue-800 dark:text-blue-200 font-mono">
                        Implementasikan logika callback di controller untuk memproses login atau pendaftaran pengguna dari penyedia eksternal.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
