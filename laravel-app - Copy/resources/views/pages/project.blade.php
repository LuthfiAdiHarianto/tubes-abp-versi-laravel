@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-slate-100 to-slate-50 dark:from-slate-800 dark:to-slate-900">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 dark:text-white mb-6">Portfolio & Proyek</h1>
            <p class="text-lg text-slate-600 dark:text-slate-400">
                Lihat berbagai proyek fotografi produk yang telah kami kerjakan untuk berbagai brand dan industri.
            </p>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-12 text-center">Karya Terbaru</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @for($i = 1; $i <= 6; $i++)
                    <div class="group overflow-hidden rounded-lg bg-gradient-to-br from-orange-400 to-red-500 aspect-square cursor-pointer">
                        <div class="w-full h-full bg-gradient-to-br from-slate-300 to-slate-400 dark:from-slate-600 dark:to-slate-700 flex items-center justify-center relative overflow-hidden group-hover:scale-105 transition-transform duration-300">
                            <div class="text-6xl opacity-20">📸</div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-start p-4">
                                <div class="text-white">
                                    <h3 class="font-bold text-lg">Proyek #{{ $i }}</h3>
                                    <p class="text-sm opacity-90">Product Photography</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="text-center mt-12">
                <p class="text-slate-600 dark:text-slate-400 mb-4">Ingin melihat lebih banyak portofolio?</p>
                <a href="{{ route('contact') }}" class="inline-block px-8 py-3 bg-gradient-to-r from-orange-500 to-red-600 text-white font-semibold rounded-lg hover:shadow-lg transition-shadow">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </section>
@endsection
