@extends('layouts.app')

@section('content')
    <section class="py-12 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-slate-100 to-slate-50 dark:from-slate-800 dark:to-slate-900">
        <div class="max-w-6xl mx-auto flex items-center justify-between">
            <div>
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-2">Paket Layanan</h1>
                <p class="text-slate-600 dark:text-slate-400">Atur dan perbarui paket produk Anda</p>
            </div>
            <button class="px-6 py-3 bg-gradient-to-r from-orange-500 to-red-600 text-white font-semibold rounded-lg hover:shadow-lg transition-shadow">+ Tambah Paket</button>
        </div>
    </section>

    <section class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-8 hover:shadow-xl hover:border-orange-500 dark:hover:border-orange-500 transition-all">
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-2">Starter</h3>
                    <p class="text-slate-600 dark:text-slate-400 mb-6">Paket dasar untuk pemula</p>
                    <div class="text-4xl font-bold text-slate-900 dark:text-white mb-6">Rp 299K<span class="text-base text-slate-600 dark:text-slate-400">/bulan</span></div>
                    <ul class="space-y-3 mb-8 text-slate-600 dark:text-slate-400 text-sm">
                        <li class="flex items-center"><span class="w-4 h-4 bg-green-500 rounded-full mr-3"></span>Fitur dasar</li>
                        <li class="flex items-center"><span class="w-4 h-4 bg-green-500 rounded-full mr-3"></span>Support email</li>
                        <li class="flex items-center"><span class="w-4 h-4 bg-green-500 rounded-full mr-3"></span>1GB storage</li>
                    </ul>
                    <div class="flex gap-2">
                        <button class="flex-1 px-4 py-2 border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-white rounded-lg hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">Edit</button>
                        <button class="flex-1 px-4 py-2 text-red-600 border border-red-300 rounded-lg hover:bg-red-50 dark:hover:bg-red-950 transition-colors">Hapus</button>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-orange-500 to-red-600 rounded-xl p-8 relative transform md:scale-105 md:shadow-2xl">
                    <div class="absolute top-4 right-4 bg-white text-orange-600 px-3 py-1 rounded-full text-xs font-bold">Populer</div>
                    <h3 class="text-2xl font-bold text-white mb-2">Professional</h3>
                    <p class="text-orange-100 mb-6">Paket terpop untuk profesional</p>
                    <div class="text-4xl font-bold text-white mb-6">Rp 799K<span class="text-base text-orange-100">/bulan</span></div>
                    <ul class="space-y-3 mb-8 text-orange-50 text-sm">
                        <li class="flex items-center"><span class="w-4 h-4 bg-white rounded-full mr-3"></span>Semua fitur dasar</li>
                        <li class="flex items-center"><span class="w-4 h-4 bg-white rounded-full mr-3"></span>Support 24/7</li>
                        <li class="flex items-center"><span class="w-4 h-4 bg-white rounded-full mr-3"></span>100GB storage</li>
                    </ul>
                    <div class="flex gap-2">
                        <button class="flex-1 px-4 py-2 bg-white text-orange-600 font-semibold rounded-lg hover:bg-orange-50 transition-colors">Edit</button>
                        <button class="flex-1 px-4 py-2 border-2 border-white text-white rounded-lg hover:bg-white/20 transition-colors">Hapus</button>
                    </div>
                </div>
                <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-8 hover:shadow-xl hover:border-orange-500 dark:hover:border-orange-500 transition-all">
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-2">Enterprise</h3>
                    <p class="text-slate-600 dark:text-slate-400 mb-6">Solusi enterprise komprehensif</p>
                    <div class="text-4xl font-bold text-slate-900 dark:text-white mb-6">Rp 2.5M<span class="text-base text-slate-600 dark:text-slate-400">/bulan</span></div>
                    <ul class="space-y-3 mb-8 text-slate-600 dark:text-slate-400 text-sm">
                        <li class="flex items-center"><span class="w-4 h-4 bg-green-500 rounded-full mr-3"></span>Semua fitur</li>
                        <li class="flex items-center"><span class="w-4 h-4 bg-green-500 rounded-full mr-3"></span>Dedicated support</li>
                        <li class="flex items-center"><span class="w-4 h-4 bg-green-500 rounded-full mr-3"></span>Unlimited storage</li>
                    </ul>
                    <div class="flex gap-2">
                        <button class="flex-1 px-4 py-2 border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-white rounded-lg hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">Edit</button>
                        <button class="flex-1 px-4 py-2 text-red-600 border border-red-300 rounded-lg hover:bg-red-50 dark:hover:bg-red-950 transition-colors">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
