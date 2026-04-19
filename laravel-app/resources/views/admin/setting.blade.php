@extends('layouts.app')

@section('content')
    <section class="py-12 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-slate-100 to-slate-50 dark:from-slate-800 dark:to-slate-900">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-2">Pengaturan</h1>
            <p class="text-slate-600 dark:text-slate-400">Konfigurasi platform dan kebijakan</p>
        </div>
    </section>

    <section class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-8 mb-8">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">Pengaturan Umum</h2>
                <form class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-slate-900 dark:text-white mb-2">Nama Bisnis</label>
                        <input type="text" value="Pixora Studio" class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-orange-500 dark:bg-slate-700 dark:text-white" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-900 dark:text-white mb-2">Deskripsi Bisnis</label>
                        <textarea rows="4" class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-orange-500 dark:bg-slate-700 dark:text-white"></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-900 dark:text-white mb-2">Email Kontak</label>
                        <input type="email" placeholder="contact@pixora.com" class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-orange-500 dark:bg-slate-700 dark:text-white" />
                    </div>
                </form>
            </div>
            <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-8 mb-8">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">Pengaturan Pembayaran</h2>
                <div class="space-y-4">
                    <div class="flex items-center">
                        <input type="checkbox" id="midtrans" class="w-4 h-4 rounded" checked />
                        <label for="midtrans" class="ml-3 text-slate-900 dark:text-white">Midtrans</label>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="stripe" class="w-4 h-4 rounded" />
                        <label for="stripe" class="ml-3 text-slate-900 dark:text-white">Stripe</label>
                    </div>
                </div>
            </div>
            <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-8">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">Keamanan</h2>
                <div class="space-y-4">
                    <button class="px-6 py-2 border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-white rounded-lg hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">Ubah Password Admin</button>
                    <button class="px-6 py-2 border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-white rounded-lg hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">Kelola Kunci API</button>
                </div>
            </div>
            <div class="mt-8 flex gap-4">
                <button class="px-6 py-3 bg-gradient-to-r from-orange-500 to-red-600 text-white font-semibold rounded-lg hover:shadow-lg transition-shadow">Simpan Pengaturan</button>
                <button class="px-6 py-3 border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-white font-semibold rounded-lg hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">Batal</button>
            </div>
        </div>
    </section>
@endsection
