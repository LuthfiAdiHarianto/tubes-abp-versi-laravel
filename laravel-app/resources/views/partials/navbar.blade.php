<header class="sticky top-0 z-50 w-full bg-white/95 dark:bg-slate-950/95 backdrop-blur border-b border-slate-200 dark:border-slate-800 transition-colors">
    <nav class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex items-center justify-between gap-4">
        <a href="{{ route('home') }}" class="flex items-center gap-2 group">
            <div class="w-8 h-8 bg-gradient-to-br from-orange-500 to-red-600 rounded-lg flex items-center justify-center">
                <span class="text-white font-bold text-sm">📸</span>
            </div>
            <span class="font-bold text-lg hidden sm:inline text-slate-900 dark:text-white group-hover:text-orange-600 transition-colors">Pixora</span>
        </a>
        
        <div class="flex items-center gap-1 sm:gap-2 flex-wrap justify-center">
            <a href="{{ route('home') }}" class="px-4 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('home') ? 'bg-orange-100 dark:bg-orange-950 text-orange-600 dark:text-orange-400' : 'hover:bg-slate-100 dark:hover:bg-slate-800' }}">Home</a>
            <a href="{{ route('about') }}" class="px-4 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('about') ? 'bg-orange-100 dark:bg-orange-950 text-orange-600 dark:text-orange-400' : 'hover:bg-slate-100 dark:hover:bg-slate-800' }}">About</a>
            <a href="{{ route('project') }}" class="px-4 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('project') ? 'bg-orange-100 dark:bg-orange-950 text-orange-600 dark:text-orange-400' : 'hover:bg-slate-100 dark:hover:bg-slate-800' }}">Project</a>
            <a href="{{ route('contact') }}" class="px-4 py-2 rounded-lg text-sm font-medium transition-colors {{ request()->routeIs('contact') ? 'bg-orange-100 dark:bg-orange-950 text-orange-600 dark:text-orange-400' : 'hover:bg-slate-100 dark:hover:bg-slate-800' }}">Contact</a>
            <a href="{{ route('login') }}" class="px-4 py-2 rounded-lg text-sm font-medium border border-slate-300 dark:border-slate-700 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">Login</a>
        </div>
    </nav>
</header>
