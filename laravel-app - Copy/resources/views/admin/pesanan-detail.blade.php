@extends('layouts.app')

@section('content')
    <section class="py-12 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-slate-100 to-slate-50 dark:from-slate-800 dark:to-slate-900">
        <div class="max-w-4xl mx-auto">
            <a href="{{ route('admin.pesanan') }}" class="text-orange-600 hover:text-orange-700 text-sm font-semibold mb-4 inline-block">← Kembali ke Pesanan</a>
            <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-2">Detail Pesanan #{{ $id }}</h1>
            <p class="text-slate-600 dark:text-slate-400">Kelola informasi dan status pesanan</p>
        </div>
    </section>

    <section class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 space-y-8">
                <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-8">
                    <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">Informasi Pelanggan</h2>
                    <div class="space-y-4 text-slate-600 dark:text-slate-400">
                        <p><span class="font-semibold">Nama:</span> -</p>
                        <p><span class="font-semibold">Email:</span> -</p>
                        <p><span class="font-semibold">Telepon:</span> -</p>
                    </div>
                </div>
                <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-8">
                    <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">Detail Pesanan</h2>
                    <div class="space-y-4 text-slate-600 dark:text-slate-400">
                        <p><span class="font-semibold">Layanan:</span> -</p>
                        <p><span class="font-semibold">Paket:</span> -</p>
                        <p><span class="font-semibold">Pesan:</span> -</p>
                        <p><span class="font-semibold">Total:</span> Rp -</p>
                    </div>
                </div>
            </div>
            <div class="space-y-6">
                <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-6">
                    <h3 class="font-bold text-slate-900 dark:text-white mb-4">Status</h3>
                    <div class="mb-4">
                        <span class="inline-block px-3 py-1 bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 text-sm font-semibold rounded-full">Pending</span>
                    </div>
                    <select class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg dark:bg-slate-700 dark:text-white mb-4">
                        <option>Pending</option>
                        <option>Processing</option>
                        <option>Completed</option>
                        <option>Cancelled</option>
                    </select>
                    <button class="w-full px-4 py-2 bg-gradient-to-r from-orange-500 to-red-600 text-white font-semibold rounded-lg hover:shadow-lg transition-shadow">Perbarui Status</button>
                </div>
                <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-6">
                    <h3 class="font-bold text-slate-900 dark:text-white mb-4">Aksi</h3>
                    <div class="space-y-2">
                        <button class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 text-slate-900 dark:text-white rounded-lg hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors text-sm">Kirim Notifikasi</button>
                        <button class="w-full px-4 py-2 border border-blue-300 text-blue-600 rounded-lg hover:bg-blue-50 dark:hover:bg-blue-950 transition-colors text-sm">Lihat Invoice</button>
                        <button class="w-full px-4 py-2 border border-red-300 text-red-600 rounded-lg hover:bg-red-50 dark:hover:bg-red-950 transition-colors text-sm">Hapus Pesanan</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
