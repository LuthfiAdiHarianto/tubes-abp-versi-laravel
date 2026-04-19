@extends('layouts.app')

@section('content')
    <section class="min-h-[calc(100vh-200px)] flex items-center justify-center px-4 py-12">
        <div class="w-full max-w-md">
            <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-cyan-500 to-blue-600 px-8 py-6">
                    <h1 class="text-3xl font-bold text-white">Reset Password</h1>
                    <p class="text-cyan-100 mt-2">Buat password baru Anda</p>
                </div>
                <div class="p-8">
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-900 dark:text-white mb-2">Password Baru</label>
                            <input type="password" placeholder="Password baru" class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent dark:bg-slate-700 dark:text-white transition" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-900 dark:text-white mb-2">Konfirmasi Password</label>
                            <input type="password" placeholder="Konfirmasi password" class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent dark:bg-slate-700 dark:text-white transition" />
                        </div>
                        <button type="submit" class="w-full px-4 py-2 bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-semibold rounded-lg hover:shadow-lg transition-shadow mt-6">
                            Reset Password
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
