@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-orange-50 to-red-50 dark:from-slate-900 dark:to-red-950 min-h-[600px] flex items-center">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-orange-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-red-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
        </div>
        
        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-20 sm:py-32">
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-5xl sm:text-6xl font-bold text-slate-900 dark:text-white mb-6 leading-tight">
                    Transformasi Produk Anda Menjadi Visual Menakjubkan
                </h1>
                <p class="text-xl text-slate-600 dark:text-slate-300 mb-8">
                    Studio fotografi profesional dengan konsep kreatif untuk brand Anda. Hasil visual yang siap digunakan untuk pemasaran digital.
                </p>
                <div class="flex gap-4 justify-center flex-wrap">
                    <a href="{{ route('contact') }}" class="px-8 py-3 bg-gradient-to-r from-orange-500 to-red-600 text-white font-semibold rounded-lg hover:shadow-lg transition-shadow">
                        Pesan Sekarang
                    </a>
                    <a href="{{ route('project') }}" class="px-8 py-3 border-2 border-orange-500 text-orange-600 dark:text-orange-400 font-semibold rounded-lg hover:bg-orange-50 dark:hover:bg-slate-800 transition-colors">
                        Lihat Portfolio
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl font-bold text-center mb-4 text-slate-900 dark:text-white">Layanan Unggulan</h2>
            <p class="text-center text-slate-600 dark:text-slate-400 mb-12 max-w-2xl mx-auto">
                Kami menyediakan berbagai layanan fotografi profesional untuk memenuhi kebutuhan bisnis Anda.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="group relative bg-white dark:bg-slate-800 rounded-xl overflow-hidden border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-400 to-red-500 opacity-0 group-hover:opacity-5 transition-opacity"></div>
                    <div class="p-8 relative z-10">
                        <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mb-4">
                            <span class="text-2xl">📦</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Product Photography</h3>
                        <p class="text-slate-600 dark:text-slate-400">Foto produk profesional dengan lighting studio dan komposisi yang menarik.</p>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="group relative bg-white dark:bg-slate-800 rounded-xl overflow-hidden border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-400 to-red-500 opacity-0 group-hover:opacity-5 transition-opacity"></div>
                    <div class="p-8 relative z-10">
                        <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mb-4">
                            <span class="text-2xl">🍽️</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Food Photography</h3>
                        <p class="text-slate-600 dark:text-slate-400">Spesialisasi foto makanan dan minuman untuk restoran dan e-commerce F&B.</p>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="group relative bg-white dark:bg-slate-800 rounded-xl overflow-hidden border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-400 to-red-500 opacity-0 group-hover:opacity-5 transition-opacity"></div>
                    <div class="p-8 relative z-10">
                        <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mb-4">
                            <span class="text-2xl">🔄</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">360° Photography</h3>
                        <p class="text-slate-600 dark:text-slate-400">Foto produk 360 derajat untuk pengalaman interaktif pelanggan online.</p>
                    </div>
                </div>

                <!-- Service Card 4 -->
                <div class="group relative bg-white dark:bg-slate-800 rounded-xl overflow-hidden border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-400 to-red-500 opacity-0 group-hover:opacity-5 transition-opacity"></div>
                    <div class="p-8 relative z-10">
                        <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mb-4">
                            <span class="text-2xl">✨</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Retouching & Editing</h3>
                        <p class="text-slate-600 dark:text-slate-400">Post-processing profesional untuk hasil final yang sempurna.</p>
                    </div>
                </div>

                <!-- Service Card 5 -->
                <div class="group relative bg-white dark:bg-slate-800 rounded-xl overflow-hidden border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-400 to-red-500 opacity-0 group-hover:opacity-5 transition-opacity"></div>
                    <div class="p-8 relative z-10">
                        <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mb-4">
                            <span class="text-2xl">🎨</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Creative Direction</h3>
                        <p class="text-slate-600 dark:text-slate-400">Konsep kreatif dan styling untuk identitas visual brand Anda.</p>
                    </div>
                </div>

                <!-- Service Card 6 -->
                <div class="group relative bg-white dark:bg-slate-800 rounded-xl overflow-hidden border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-400 to-red-500 opacity-0 group-hover:opacity-5 transition-opacity"></div>
                    <div class="p-8 relative z-10">
                        <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mb-4">
                            <span class="text-2xl">📊</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Katalog Visual</h3>
                        <p class="text-slate-600 dark:text-slate-400">Produksi katalog produk lengkap dengan konsistensi visual.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 bg-slate-50 dark:bg-slate-900">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl font-bold text-center mb-4 text-slate-900 dark:text-white">Paket Harga</h2>
            <p class="text-center text-slate-600 dark:text-slate-400 mb-12">Pilih paket yang sesuai dengan kebutuhan Anda</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-3xl mx-auto">
                <!-- Package 1 -->
                <div class="bg-white dark:bg-slate-800 rounded-xl border-2 border-slate-200 dark:border-slate-700 p-8 hover:border-orange-400 transition-colors">
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-2">Paket Akhir Tahun</h3>
                    <p class="text-4xl font-bold text-orange-600 mb-4">Rp 25.000</p>
                    <ul class="space-y-3 mb-8 text-slate-600 dark:text-slate-400">
                        <li class="flex items-start gap-3">
                            <span class="text-green-500 font-bold">✓</span>
                            <span>Akses 10 file foto berkualitas tinggi</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-green-500 font-bold">✓</span>
                            <span>1 hari pengerjaan</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-green-500 font-bold">✓</span>
                            <span>Retouching profesional</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-green-500 font-bold">✓</span>
                            <span>Konsultasi awal</span>
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="w-full block text-center px-6 py-2 border-2 border-orange-500 text-orange-600 dark:text-orange-400 font-semibold rounded-lg hover:bg-orange-50 dark:hover:bg-slate-700 transition-colors">
                        Pilih Paket
                    </a>
                </div>

                <!-- Package 2 - Featured -->
                <div class="relative bg-gradient-to-br from-orange-500 to-red-600 rounded-xl p-8 text-white transform md:scale-105 shadow-xl">
                    <div class="absolute -top-3 -right-3 bg-yellow-400 text-orange-600 px-4 py-1 rounded-full text-sm font-bold">
                        PALING POPULER
                    </div>
                    <h3 class="text-2xl font-bold mb-2">Paket Brutal</h3>
                    <p class="text-4xl font-bold mb-4">Rp 35.000</p>
                    <ul class="space-y-3 mb-8 opacity-95">
                        <li class="flex items-start gap-3">
                            <span class="font-bold">✓</span>
                            <span>Akses 20 file foto premium</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="font-bold">✓</span>
                            <span>1-2 hari pengerjaan</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="font-bold">✓</span>
                            <span>Retouching & editing ekstra</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="font-bold">✓</span>
                            <span>Konsultasi & revisi unlimited</span>
                        </li>
                    </ul>
                    <a href="{{ route('contact') }}" class="w-full block text-center px-6 py-2 bg-white text-orange-600 font-semibold rounded-lg hover:bg-slate-100 transition-colors">
                        Pesan Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold text-slate-900 dark:text-white mb-4">Siap Meningkatkan Visual Brand Anda?</h2>
            <p class="text-xl text-slate-600 dark:text-slate-400 mb-8">
                Hubungi tim kami hari ini untuk mendiskusikan kebutuhan fotografi produk Anda.
            </p>
            <a href="{{ route('contact') }}" class="inline-block px-8 py-4 bg-gradient-to-r from-orange-500 to-red-600 text-white font-semibold rounded-lg hover:shadow-lg transition-shadow text-lg">
                Mulai Konsultasi Gratis
            </a>
        </div>
    </section>
@endsection
