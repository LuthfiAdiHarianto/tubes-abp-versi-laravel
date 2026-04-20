@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-slate-100 to-slate-50 dark:from-slate-800 dark:to-slate-900">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 dark:text-white mb-6">Tentang Pixora Studio</h1>
            <p class="text-lg text-slate-600 dark:text-slate-400 leading-relaxed">
                Pixora Studio adalah studio fotografi produk yang berdedikasi untuk menghadirkan visual berkualitas tinggi untuk brand Anda. Dengan pengalaman bertahun-tahun, kami memahami pentingnya presentasi visual yang menarik dalam kesuksesan bisnis modern.
            </p>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-12 text-center">Nilai & Misi Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white dark:bg-slate-800 rounded-lg p-8 border border-slate-200 dark:border-slate-700">
                    <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">🎯</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Profesional</h3>
                    <p class="text-slate-600 dark:text-slate-400">Setiap proyek ditangani dengan standar profesional tertinggi dan perhatian terhadap detail.</p>
                </div>
                <div class="bg-white dark:bg-slate-800 rounded-lg p-8 border border-slate-200 dark:border-slate-700">
                    <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">⚡</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Responsif</h3>
                    <p class="text-slate-600 dark:text-slate-400">Kami merespons cepat dan selalu siap membantu kebutuhan mendesak Anda.</p>
                </div>
                <div class="bg-white dark:bg-slate-800 rounded-lg p-8 border border-slate-200 dark:border-slate-700">
                    <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">✨</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Inovatif</h3>
                    <p class="text-slate-600 dark:text-slate-400">Selalu mencari cara baru dan kreatif untuk menghadirkan visual terbaik.</p>
                </div>
                <div class="bg-white dark:bg-slate-800 rounded-lg p-8 border border-slate-200 dark:border-slate-700">
                    <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">🤝</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Kolaboratif</h3>
                    <p class="text-slate-600 dark:text-slate-400">Kami bekerja sama dengan klien untuk mencapai visi yang sempurna.</p>
                </div>
                <div class="bg-white dark:bg-slate-800 rounded-lg p-8 border border-slate-200 dark:border-slate-700">
                    <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">💡</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Matang</h3>
                    <p class="text-slate-600 dark:text-slate-400">Pengalaman bertahun-tahun memastikan hasil berkualitas tinggi selalu.</p>
                </div>
                <div class="bg-white dark:bg-slate-800 rounded-lg p-8 border border-slate-200 dark:border-slate-700">
                    <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">🏆</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Terpercaya</h3>
                    <p class="text-slate-600 dark:text-slate-400">Ribuan brand telah mempercayai kami untuk visual bisnis mereka.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
