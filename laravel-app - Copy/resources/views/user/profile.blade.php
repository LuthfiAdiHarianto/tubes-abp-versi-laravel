@extends('layouts.app')

@section('content')
    <section class="py-12 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-slate-100 to-slate-50 dark:from-slate-800 dark:to-slate-900">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-2">Profil Saya</h1>
            <p class="text-slate-600 dark:text-slate-400">Kelola informasi akun dan preferensi Anda</p>
        </div>
    </section>

    <section class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Profile Section -->
            <div class="lg:col-span-2">
                <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-8">
                    <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">Informasi Pribadi</h2>
                    <form class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-slate-900 dark:text-white mb-2">Nama</label>
                                <input type="text" placeholder="Nama Anda" class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent dark:bg-slate-700 dark:text-white" />
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-900 dark:text-white mb-2">Email</label>
                                <input type="email" placeholder="email@domain.com" class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent dark:bg-slate-700 dark:text-white" />
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-900 dark:text-white mb-2">Nomor Telepon</label>
                            <input type="tel" placeholder="+62 ..." class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent dark:bg-slate-700 dark:text-white" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-900 dark:text-white mb-2">Alamat</label>
                            <textarea rows="3" placeholder="Alamat lengkap Anda" class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent dark:bg-slate-700 dark:text-white"></textarea>
                        </div>
                        <button type="submit" class="px-6 py-2 bg-gradient-to-r from-orange-500 to-red-600 text-white font-semibold rounded-lg hover:shadow-lg transition-shadow">
                            Simpan Perubahan
                        </button>
                    </form>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="space-y-6">
                <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-6">
                    <h3 class="font-bold text-slate-900 dark:text-white mb-4">Akun</h3>
                    <div class="space-y-3">
                        <button class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-white rounded-lg hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">
                            Ubah Password
                        </button>
                        <button class="w-full px-4 py-2 border border-red-300 text-red-600 rounded-lg hover:bg-red-50 dark:hover:bg-red-950 transition-colors">
                            Keluar dari Akun
                        </button>
                    </div>
                </div>
                <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-6">
                    <h3 class="font-bold text-slate-900 dark:text-white mb-4">Status Membership</h3>
                    <div class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                        <p>Status: <span class="font-semibold text-slate-900 dark:text-white">Regular</span></p>
                        <p>Member sejak: -</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
