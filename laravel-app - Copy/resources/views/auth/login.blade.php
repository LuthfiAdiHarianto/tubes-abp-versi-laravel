@extends('layouts.app')

@section('content')
    <section class="min-h-[calc(100vh-200px)] flex items-center justify-center px-4 py-12">
        <div class="w-full max-w-md">
            <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-orange-500 to-red-600 px-8 py-6">
                    <h1 class="text-3xl font-bold text-white">Login</h1>
                    <p class="text-orange-100 mt-2">Masuk ke akun Pixora Anda</p>
                </div>
                <div class="p-8">
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-900 dark:text-white mb-2">Email</label>
                            <input type="email" placeholder="email@domain.com" class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent dark:bg-slate-700 dark:text-white transition" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-900 dark:text-white mb-2">Password</label>
                            <input type="password" placeholder="Password" class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent dark:bg-slate-700 dark:text-white transition" />
                        </div>
                        <div class="flex items-center justify-between">
                            <label class="flex items-center gap-2">
                                <input type="checkbox" class="rounded border-slate-300" />
                                <span class="text-sm text-slate-600 dark:text-slate-400">Ingat saya</span>
                            </label>
                            <a href="{{ route('password.request') }}" class="text-sm text-orange-600 hover:text-orange-700 font-medium">
                                Lupa password?
                            </a>
                        </div>
                        <button type="submit" class="w-full px-4 py-2 bg-gradient-to-r from-orange-500 to-red-600 text-white font-semibold rounded-lg hover:shadow-lg transition-shadow mt-6">
                            Masuk
                        </button>
                    </form>
                    <div class="mt-6 text-center">
                        <p class="text-slate-600 dark:text-slate-400">
                            Belum punya akun? 
                            <a href="{{ route('signup') }}" class="text-orange-600 hover:text-orange-700 font-medium">Daftar di sini</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
