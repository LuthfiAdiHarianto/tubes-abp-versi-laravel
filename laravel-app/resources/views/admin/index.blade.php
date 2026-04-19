@extends('layouts.app')

@section('content')
    <section class="py-12 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-slate-100 to-slate-50 dark:from-slate-800 dark:to-slate-900">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-2">Dashboard Admin</h1>
            <p class="text-slate-600 dark:text-slate-400">Kelola pesanan, paket, dan pengaturan platform</p>
        </div>
    </section>

    <section class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-6 hover:shadow-lg transition-shadow">
                    <p class="text-slate-600 dark:text-slate-400 text-sm font-medium mb-2">Total Pesanan</p>
                    <p class="text-3xl font-bold text-slate-900 dark:text-white">0</p>
                    <p class="text-xs text-slate-500 dark:text-slate-500 mt-2">Bulan ini</p>
                </div>
                <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-6 hover:shadow-lg transition-shadow">
                    <p class="text-slate-600 dark:text-slate-400 text-sm font-medium mb-2">Pendapatan</p>
                    <p class="text-3xl font-bold text-slate-900 dark:text-white">Rp 0</p>
                    <p class="text-xs text-slate-500 dark:text-slate-500 mt-2">Bulan ini</p>
                </div>
                <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-6 hover:shadow-lg transition-shadow">
                    <p class="text-slate-600 dark:text-slate-400 text-sm font-medium mb-2">Pengguna Aktif</p>
                    <p class="text-3xl font-bold text-slate-900 dark:text-white">0</p>
                    <p class="text-xs text-slate-500 dark:text-slate-500 mt-2">Total</p>
                </div>
                <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-6 hover:shadow-lg transition-shadow">
                    <p class="text-slate-600 dark:text-slate-400 text-sm font-medium mb-2">Paket Aktif</p>
                    <p class="text-3xl font-bold text-slate-900 dark:text-white">0</p>
                    <p class="text-xs text-slate-500 dark:text-slate-500 mt-2">Total</p>
                </div>
            </div>

            <!-- Navigation Cards -->
            <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">Menu Manajemen</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <a href="{{ route('admin.pesanan') }}" class="group bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-8 hover:shadow-xl hover:border-orange-500 dark:hover:border-orange-500 transition-all">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition-transform">📋</div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Pesanan</h3>
                    <p class="text-slate-600 dark:text-slate-400">Kelola dan pantau semua pesanan pelanggan</p>
                </a>
                <a href="{{ route('admin.paket') }}" class="group bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-8 hover:shadow-xl hover:border-orange-500 dark:hover:border-orange-500 transition-all">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition-transform">📦</div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Paket Layanan</h3>
                    <p class="text-slate-600 dark:text-slate-400">Atur dan perbarui paket layanan</p>
                </a>
                <a href="{{ route('admin.laporan') }}" class="group bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-8 hover:shadow-xl hover:border-orange-500 dark:hover:border-orange-500 transition-all">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition-transform">📊</div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Laporan</h3>
                    <p class="text-slate-600 dark:text-slate-400">Lihat analisis penjualan dan performa</p>
                </a>
                <a href="{{ route('admin.notifikasi') }}" class="group bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-8 hover:shadow-xl hover:border-orange-500 dark:hover:border-orange-500 transition-all">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition-transform">🔔</div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Notifikasi</h3>
                    <p class="text-slate-600 dark:text-slate-400">Kelola pemberitahuan dan alert sistem</p>
                </a>
                <a href="{{ route('admin.setting') }}" class="group bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-8 hover:shadow-xl hover:border-orange-500 dark:hover:border-orange-500 transition-all">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition-transform">⚙️</div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Pengaturan</h3>
                    <p class="text-slate-600 dark:text-slate-400">Konfigurasi platform dan kebijakan</p>
                </a>
            </div>
        </div>
    </section>
@endsection
