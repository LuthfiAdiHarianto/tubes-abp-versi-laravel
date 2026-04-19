@extends('layouts.app')

@section('content')
    <section class="py-12 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-slate-100 to-slate-50 dark:from-slate-800 dark:to-slate-900">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-2">Pesanan Saya</h1>
            <p class="text-slate-600 dark:text-slate-400">Kelola dan pantau status pesanan Anda</p>
        </div>
    </section>

    <section class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-8">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">Riwayat Pesanan</h2>
                <div class="space-y-4">
                    <div class="flex items-center justify-center py-12">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-slate-100 dark:bg-slate-700 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-3xl">📭</span>
                            </div>
                            <p class="text-slate-600 dark:text-slate-400 mb-4">Belum ada pesanan</p>
                            <a href="{{ route('contact') }}" class="inline-block px-6 py-2 bg-gradient-to-r from-orange-500 to-red-600 text-white font-semibold rounded-lg hover:shadow-lg transition-shadow">
                                Buat Pesanan Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
