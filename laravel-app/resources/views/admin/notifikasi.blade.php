@extends('layouts.app')

@section('content')
    <section class="py-12 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-slate-100 to-slate-50 dark:from-slate-800 dark:to-slate-900">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-2">Notifikasi</h1>
            <p class="text-slate-600 dark:text-slate-400">Pusat pemberitahuan dan alert sistem</p>
        </div>
    </section>

    <section class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-6 mb-8">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-bold text-slate-900 dark:text-white">Preferensi Notifikasi</h2>
                    <button class="px-4 py-2 text-sm bg-slate-100 dark:bg-slate-700 text-slate-900 dark:text-white rounded-lg hover:bg-slate-200 dark:hover:bg-slate-600 transition-colors">Tandai Semua Terbaca</button>
                </div>
            </div>
            <div class="space-y-3">
                <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-6 hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors cursor-pointer">
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="font-semibold text-slate-900 dark:text-white">Pesanan Baru</p>
                            <p class="text-sm text-slate-600 dark:text-slate-400 mt-1">Anda menerima pesanan baru dari pelanggan</p>
                            <p class="text-xs text-slate-500 dark:text-slate-500 mt-2">Sekarang</p>
                        </div>
                        <div class="w-3 h-3 bg-blue-500 rounded-full mt-1"></div>
                    </div>
                </div>
                <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-6 opacity-60">
                    <div class="flex items-start justify-between">
                        <div>
                            <p class="font-semibold text-slate-900 dark:text-white">Pembayaran Diterima</p>
                            <p class="text-sm text-slate-600 dark:text-slate-400 mt-1">Pembayaran pesanan #001 telah dikonfirmasi</p>
                            <p class="text-xs text-slate-500 dark:text-slate-500 mt-2">2 jam yang lalu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
