@extends('layouts.app')

@section('content')
    <section class="py-12 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-slate-100 to-slate-50 dark:from-slate-800 dark:to-slate-900">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-2">Laporan</h1>
            <p class="text-slate-600 dark:text-slate-400">Analisis penjualan dan performa bisnis</p>
        </div>
    </section>

    <section class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-6 mb-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-900 dark:text-white mb-2">Periode</label>
                        <select class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg dark:bg-slate-700 dark:text-white">
                            <option>Bulan Ini</option>
                            <option>Kuartal Ini</option>
                            <option>Tahun Ini</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-900 dark:text-white mb-2">Jenis Laporan</label>
                        <select class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg dark:bg-slate-700 dark:text-white">
                            <option>Penjualan</option>
                            <option>Pelanggan</option>
                            <option>Produk</option>
                        </select>
                    </div>
                    <div class="flex items-end">
                        <button class="w-full px-6 py-2 bg-gradient-to-r from-orange-500 to-red-600 text-white font-semibold rounded-lg hover:shadow-lg transition-shadow">Filter</button>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-8">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-6">Penjualan per Bulan</h3>
                    <div class="flex items-center justify-center h-64 bg-slate-50 dark:bg-slate-700 rounded-lg">
                        <p class="text-slate-500 dark:text-slate-400">Chart Placeholder</p>
                    </div>
                </div>
                <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-8">
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-6">Distribusi Layanan</h3>
                    <div class="flex items-center justify-center h-64 bg-slate-50 dark:bg-slate-700 rounded-lg">
                        <p class="text-slate-500 dark:text-slate-400">Chart Placeholder</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
