<div class="min-h-screen bg-slate-50">
    <aside class="fixed inset-y-0 left-0 hidden w-64 border-r border-violet-100 bg-white px-5 py-7 md:block">
        <a href="{{ route('admin') }}" class="flex items-center gap-3 text-lg font-extrabold tracking-tight text-slate-900">
            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-violet-700 text-white" aria-hidden="true">
                <svg class="h-6 w-6" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 5.5h16M6 3v5m12-5v5M5 10h14v10.5H5zM8 14h3m2 0h3m-8 3h3m2 0h3" />
                </svg>
            </span>
            <span>meu <span class="text-violet-700">cardápio</span></span>
        </a>

        <p class="mb-3 mt-10 px-3 text-xs font-bold uppercase tracking-[0.15em] text-slate-400">Menu</p>
        <a href="{{ route('admin') }}" class="flex items-center gap-3 rounded-xl bg-violet-50 px-3 py-3 text-sm font-semibold text-violet-800">
            <svg class="h-5 w-5" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <rect width="7" height="9" x="3" y="3" rx="1" />
                <rect width="7" height="5" x="14" y="3" rx="1" />
                <rect width="7" height="9" x="14" y="12" rx="1" />
                <rect width="7" height="5" x="3" y="16" rx="1" />
            </svg>
            Visão geral
        </a>
        <a href="{{ route('admin.payments') }}" class="mt-2 flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-semibold text-slate-600 transition hover:bg-violet-50 hover:text-violet-800">
            <svg class="h-5 w-5" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                <rect width="18" height="14" x="3" y="5" rx="2" />
                <path stroke-linecap="round" d="M3 10h18m-14 5h4" />
            </svg>
            Pagamentos
        </a>

        <form method="POST" action="{{ route('logout') }}" class="absolute bottom-7 left-5 right-5">
            @csrf
            <button type="submit" class="flex w-full items-center gap-3 rounded-xl px-3 py-3 text-sm font-semibold text-slate-600 transition hover:bg-slate-50 hover:text-violet-800">
                <svg class="h-5 w-5" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 17l5-5-5-5m5 5H3m9-9h6a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-6" />
                </svg>
                Sair da conta
            </button>
        </form>
    </aside>

    <div class="md:pl-64">
        <header class="flex items-center justify-between border-b border-slate-200 bg-white px-6 py-5 sm:px-10">
            <div>
                <p class="text-sm text-slate-500">Área administrativa</p>
                <h1 class="mt-1 text-xl font-bold text-slate-900">Visão geral</h1>
            </div>
            <div class="flex items-center gap-3">
                <span class="flex h-10 w-10 items-center justify-center rounded-full bg-violet-100 text-sm font-bold text-violet-800">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </span>
                <div class="hidden sm:block">
                    <p class="text-sm font-semibold text-slate-900">{{ auth()->user()->name }}</p>
                    <p class="text-xs text-slate-500">{{ auth()->user()->email }}</p>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="md:hidden">
                    @csrf
                    <button type="submit" class="text-sm font-semibold text-violet-700">Sair</button>
                </form>
            </div>
        </header>

        <main class="px-6 py-8 sm:px-10">
            <div class="rounded-2xl bg-gradient-to-r from-violet-700 to-violet-600 p-7 text-white shadow-lg shadow-violet-200 sm:p-9">
                <p class="text-sm font-semibold text-violet-100">Olá, {{ auth()->user()->name }}!</p>
                <h2 class="mt-2 text-2xl font-extrabold sm:text-3xl">Seu cardápio está pronto para conferir</h2>
                <p class="mt-3 max-w-xl leading-7 text-violet-100">Veja os pratos, fotos e preços de demonstração. Você também pode consultar as opções de pagamento.</p>
            </div>

            <div class="mt-8 flex items-center justify-between gap-4">
                <h2 class="text-xl font-extrabold text-slate-900">Pratos do cardápio</h2>
                <a href="{{ route('admin.payments') }}" class="text-sm font-bold text-violet-700 hover:text-violet-900">Ver pagamentos</a>
            </div>
            <section class="mt-4 grid gap-5 sm:grid-cols-2 xl:grid-cols-3">
                @foreach ($dishes as $dish)
                    <article class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">
                        <img
                            class="h-36 w-full object-cover"
                            src="https://images.unsplash.com/{{ $dish['image'] }}?auto=format&fit=crop&w=640&q=80"
                            alt="{{ $dish['alt'] }}"
                            loading="lazy"
                        >
                        <div class="p-5">
                            <div class="flex items-baseline justify-between gap-3">
                                <h3 class="font-bold text-slate-900">{{ $dish['name'] }}</h3>
                                <span class="shrink-0 font-extrabold text-violet-700">{{ $dish['price'] }}</span>
                            </div>
                            <p class="mt-2 text-sm leading-6 text-slate-600">{{ $dish['description'] }}</p>
                        </div>
                    </article>
                @endforeach
            </section>
            <p class="mt-6 text-center text-xs text-slate-500">Pratos e preços de demonstração.</p>
        </main>
    </div>
</div>
