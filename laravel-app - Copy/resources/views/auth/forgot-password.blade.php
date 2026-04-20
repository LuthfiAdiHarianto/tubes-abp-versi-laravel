@extends('layouts.app')

@section('content')
    <section class="min-h-[calc(100vh-200px)] flex items-center justify-center px-4 py-12">
        <div class="w-full max-w-md">
            <div class="bg-white dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 shadow-lg overflow-hidden">
                <div class="bg-gradient-to-r from-amber-500 to-orange-600 px-8 py-6">
                    <h1 class="text-3xl font-bold text-white">Lupa Password</h1>
                    <p class="text-amber-100 mt-2">Dapatkan tautan reset password</p>
                </div>
                <div class="p-8">
                    <p class="text-slate-600 dark:text-slate-400 mb-6">
                        Masukkan email terdaftar Anda dan kami akan mengirimkan tautan reset password.
                    </p>
                    <form class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-slate-900 dark:text-white mb-2">Email</label>
                            <input type="email" placeholder="email@domain.com" class="w-full px-4 py-2 border border-slate-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent dark:bg-slate-700 dark:text-white transition" />
                        </div>
                        <button type="submit" class="w-full px-4 py-2 bg-gradient-to-r from-amber-500 to-orange-600 text-white font-semibold rounded-lg hover:shadow-lg transition-shadow mt-6">
                            Kirim Tautan Reset
                        </button>
                    </form>
                    <div class="mt-6 text-center">
                        <a href="{{ route('login') }}" class="text-amber-600 hover:text-amber-700 font-medium"> Kembali ke login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
