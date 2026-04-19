@extends('layouts.app')

@section('content')
    <section class="py-12 px-4 sm:px-6 lg:px-8 bg-gradient-to-br from-slate-100 to-slate-50 dark:from-slate-800 dark:to-slate-900">
        <div class="max-w-6xl mx-auto flex items-center justify-between">
            <div>
                <h1 class="text-4xl font-bold text-slate-900 dark:text-white mb-2">Pesanan</h1>
                <p class="text-slate-600 dark:text-slate-400">Kelola semua pesanan pelanggan</p>
            </div>
        </div>
    </section>

    <section class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 p-6 mb-8">
                <div class="flex gap-4">
                    <input type="text" placeholder="Cari pesanan..." class="flex-1 px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-orange-500 dark:bg-slate-700 dark:text-white" />
                    <select class="px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg dark:bg-slate-700 dark:text-white">
                        <option>Semua Status</option>
                        <option>Pending</option>
                        <option>Processing</option>
                        <option>Completed</option>
                        <option>Cancelled</option>
                    </select>
                </div>
            </div>
            <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 overflow-hidden">
                <table class="w-full">
                    <thead class="bg-slate-50 dark:bg-slate-700 border-b border-slate-200 dark:border-slate-600">
                        <tr>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">ID</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Pelanggan</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Email</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Layanan</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Status</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-slate-900 dark:text-white">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                        <tr class="hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">
                            <td colspan="6" class="px-6 py-12 text-center text-slate-600 dark:text-slate-400">
                                <p class="mb-4">Belum ada pesanan</p>
                                <p class="text-sm">Pesanan akan tampil di sini setelah pelanggan membuat pesanan baru</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
