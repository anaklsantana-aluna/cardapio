<main class="min-h-screen bg-stone-50">
    <header class="border-b border-stone-200 bg-white">
        <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-5">
            <a href="{{ route('menu') }}" class="flex items-center gap-3 text-lg font-extrabold tracking-tight text-slate-900" aria-label="Meu Cardápio">
                <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-violet-700 text-white" aria-hidden="true">
                    <svg class="h-6 w-6" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 5.5h16M6 3v5m12-5v5M5 10h14v10.5H5zM8 14h3m2 0h3m-8 3h3m2 0h3" />
                    </svg>
                </span>
                <span>meu <span class="text-violet-700">cardápio</span></span>
            </a>
            <a href="{{ route('home') }}#acesso" class="rounded-full bg-violet-700 px-5 py-2.5 text-sm font-bold text-white transition hover:bg-violet-800">
                Acessar minha conta
            </a>
        </div>
    </header>

    <section class="mx-auto max-w-6xl px-6 py-12 sm:py-16">
        <div class="mb-9">
            <p class="text-sm font-bold uppercase tracking-[0.16em] text-violet-700">Feito para dar água na boca</p>
            <h1 class="mt-2 text-3xl font-black tracking-tight text-slate-950 sm:text-4xl">Nosso cardápio</h1>
            <p class="mt-3 max-w-2xl text-slate-600">Escolha seu prato favorito. Preparado com carinho e servido fresquinho.</p>
        </div>

        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($dishes as $dish)
                <article class="overflow-hidden rounded-2xl border border-stone-200 bg-white shadow-sm transition hover:-translate-y-1 hover:shadow-lg">
                    <img
                        class="h-40 w-full object-cover"
                        src="https://images.unsplash.com/{{ $dish['image'] }}?auto=format&fit=crop&w=700&q=80"
                        alt="{{ $dish['alt'] }}"
                        loading="lazy"
                    >
                    <div class="p-5">
                        <div class="flex items-baseline justify-between gap-3">
                            <h2 class="font-bold text-slate-900">{{ $dish['name'] }}</h2>
                            <span class="shrink-0 font-extrabold text-violet-700">{{ $dish['price'] }}</span>
                        </div>
                        <p class="mt-2 text-sm leading-6 text-slate-600">{{ $dish['description'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>

        <p class="mt-8 text-center text-xs text-slate-500">Imagens ilustrativas. Preços de demonstração.</p>
    </section>
</main>
