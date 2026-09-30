<nav class="bg-white border-b border-slate-200 sticky top-0 z-10">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center h-16">
            <a href="{{ url('/') }}" class="flex items-center gap-2 font-bold text-lg text-brand-600">
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-lg bg-brand-600 text-white">M</span>
                MyApp
            </a>

            <div class="hidden md:flex items-center gap-1">
                <a href="{{ route('books.index') }}"
                    class="px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('books.*') ? 'bg-brand-50 text-brand-700' : 'text-slate-600 hover:bg-slate-100' }}">
                    Buku
                </a>
                <a href="{{ route('users.index') }}"
                    class="px-3 py-2 rounded-md text-sm font-medium {{ request()->routeIs('users.*') ? 'bg-brand-50 text-brand-700' : 'text-slate-600 hover:bg-slate-100' }}">
                    Pengguna
                </a>
            </div>

            <div class="flex items-center gap-3">
                @auth
                    <a href="{{ route('profile.edit') }}" class="flex items-center gap-2 group">
                        <span
                            class="h-8 w-8 rounded-full bg-brand-100 text-brand-700 flex items-center justify-center text-sm font-semibold">
                            {{ strtoupper(substr(auth()->user()->name ?? 'U', 0, 1)) }}
                        </span>
                        <span class="hidden sm:inline text-sm font-medium text-slate-600 group-hover:text-brand-700">
                            {{ auth()->user()->name ?? 'Profil' }}
                        </span>
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="text-sm font-medium text-slate-500 hover:text-red-600">Keluar</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-medium text-brand-600 hover:text-brand-700">Masuk</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
