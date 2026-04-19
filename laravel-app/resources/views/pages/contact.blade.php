@extends('layouts.app')

@section('content')
    <!-- Contact Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-slate-100 to-slate-50 dark:from-slate-800 dark:to-slate-900">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl sm:text-5xl font-bold text-slate-900 dark:text-white mb-6">Hubungi Kami</h1>
            <p class="text-lg text-slate-600 dark:text-slate-400">
                Siap untuk mengubah produk Anda menjadi visual menakjubkan? Hubungi tim kami hari ini!
            </p>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="py-20 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-8">
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">Form Pemesanan</h2>
                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-900 dark:text-white mb-1">Nama</label>
                        <input type="text" class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent dark:bg-slate-700 dark:text-white" placeholder="Nama Anda" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-900 dark:text-white mb-1">Email</label>
                        <input type="email" class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent dark:bg-slate-700 dark:text-white" placeholder="email@domain.com" />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-900 dark:text-white mb-1">Nomor Telepon</label>
                        <input type="tel" class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent dark:bg-slate-700 dark:text-white" placeholder="+62 ..." />
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-900 dark:text-white mb-1">Layanan</label>
                        <select class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent dark:bg-slate-700 dark:text-white">
                            <option>Pilih layanan</option>
                            <option>Product Photography</option>
                            <option>Food Photography</option>
                            <option>360° Photography</option>
                            <option>Creative Direction</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-900 dark:text-white mb-1">Pesan</label>
                        <textarea rows="4" class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent dark:bg-slate-700 dark:text-white" placeholder="Ceritakan kebutuhan Anda..."></textarea>
                    </div>
                    <button type="submit" class="w-full px-6 py-3 bg-gradient-to-r from-orange-500 to-red-600 text-white font-semibold rounded-lg hover:shadow-lg transition-shadow">
                        Kirim Pesan
                    </button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="space-y-8">
                <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-8">
                    <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">📱</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">WhatsApp</h3>
                    <a href="https://wa.me/6285142070127" class="text-orange-600 dark:text-orange-400 hover:underline">+62 851-4207-0127</a>
                </div>
                <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-8">
                    <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">📧</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Email</h3>
                    <a href="mailto:hello@pixora.com" class="text-orange-600 dark:text-orange-400 hover:underline">hello@pixora.com</a>
                </div>
                <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-8">
                    <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900 rounded-lg flex items-center justify-center mb-4">
                        <span class="text-2xl">📍</span>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Lokasi</h3>
                    <p class="text-slate-600 dark:text-slate-400">Studio berlokasi di Indonesia. Kami menerima pengiriman produk dari seluruh nusantara via kurir terpercaya.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
