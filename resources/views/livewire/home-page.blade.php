<main class="relative min-h-screen overflow-hidden bg-white">
    <div class="absolute -left-40 -top-40 h-96 w-96 rounded-full bg-violet-100/70 blur-3xl" aria-hidden="true"></div>
    <div class="absolute -bottom-48 right-1/3 h-96 w-96 rounded-full bg-fuchsia-100/50 blur-3xl" aria-hidden="true"></div>

    <header class="relative mx-auto flex max-w-7xl items-center justify-between px-6 py-7 lg:px-10">
        <a href="{{ route('menu') }}" class="flex items-center gap-3 text-xl font-extrabold tracking-tight text-slate-900" aria-label="Abrir meu cardápio">
            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-violet-700 text-white shadow-lg shadow-violet-200" aria-hidden="true">
                <svg class="h-6 w-6" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 5.5h16M6 3v5m12-5v5M5 10h14v10.5H5zM8 14h3m2 0h3m-8 3h3m2 0h3" />
                </svg>
            </span>
            <span>meu <span class="text-violet-700">cardápio</span></span>
        </a>
        <a href="#acesso" class="hidden rounded-full px-5 py-2.5 text-sm font-semibold text-violet-800 transition hover:bg-violet-50 sm:inline-flex">
            Acessar minha conta
        </a>
    </header>

    <section class="relative mx-auto grid max-w-7xl items-center gap-14 px-6 pb-16 pt-8 lg:grid-cols-[1.05fr_0.95fr] lg:gap-20 lg:px-10 lg:pb-24 lg:pt-12">
        <div class="max-w-2xl">
            <span class="inline-flex items-center gap-2 rounded-full border border-violet-100 bg-white/80 px-4 py-2 text-sm font-semibold text-violet-800 shadow-sm">
                <span class="h-2 w-2 rounded-full bg-violet-500"></span>
                Seu negócio merece ser visto
            </span>
            <h1 class="mt-7 text-4xl font-black leading-tight tracking-tight text-slate-950 sm:text-5xl lg:text-6xl">
                Seu cardápio na palma da mão.
                <span class="text-violet-700">Seu negócio em destaque.</span>
            </h1>
            <p class="mt-6 max-w-xl text-lg leading-8 text-slate-600">
                Crie um cardápio digital bonito e fácil de compartilhar. Organize seus produtos e deixe seus clientes escolherem de onde estiverem.
            </p>

            <div class="mt-9 grid gap-5 sm:grid-cols-2">
                <div class="flex gap-3">
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-violet-100 text-violet-700" aria-hidden="true">
                        <svg class="h-5 w-5" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                        </svg>
                    </span>
                    <div>
                        <h2 class="font-bold text-slate-900">Fácil de criar</h2>
                        <p class="mt-1 text-sm leading-6 text-slate-600">Tudo organizado para você começar sem complicação.</p>
                    </div>
                </div>
                <div class="flex gap-3">
                    <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-violet-100 text-violet-700" aria-hidden="true">
                        <svg class="h-5 w-5" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <rect width="14" height="20" x="5" y="2" rx="2" />
                            <path stroke-linecap="round" d="M11 18h2" />
                        </svg>
                    </span>
                    <div>
                        <h2 class="font-bold text-slate-900">Compartilhe onde quiser</h2>
                        <p class="mt-1 text-sm leading-6 text-slate-600">Seu cardápio online, acessível pelo celular.</p>
                    </div>
                </div>

                <div class="mt-9 grid grid-cols-3 gap-3" aria-label="Alguns pratos do cardápio">
                    <img class="h-20 w-full rounded-2xl object-cover shadow-md sm:h-28" src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?auto=format&fit=crop&w=400&q=75" alt="Hambúrguer artesanal com queijo" loading="lazy">
                    <img class="h-20 w-full rounded-2xl object-cover shadow-md sm:h-28" src="https://images.unsplash.com/photo-1574071318508-1cdbab80d002?auto=format&fit=crop&w=400&q=75" alt="Pizza assada com queijo e manjericão" loading="lazy">
                    <img class="h-20 w-full rounded-2xl object-cover shadow-md sm:h-28" src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=400&q=75" alt="Salada fresca colorida" loading="lazy">
                </div>
                <a href="{{ route('menu') }}" class="mt-4 inline-flex items-center gap-2 text-sm font-bold text-violet-700 hover:text-violet-900">
                    Ver pratos e preços
                    <span aria-hidden="true">&rarr;</span>
                </a>
            </div>
        </div>

        <div id="acesso" class="w-full max-w-md justify-self-center lg:justify-self-end">
            <div class="rounded-3xl border border-violet-100 bg-white p-7 shadow-2xl shadow-violet-100/80 sm:p-9">
                <div class="mb-7">
                    <p class="text-sm font-bold uppercase tracking-[0.16em] text-violet-700">
                        {{ $isRegistering ? 'Comece agora' : 'Bem-vindo de volta' }}
                    </p>
                    <h2 class="mt-2 text-2xl font-extrabold tracking-tight text-slate-950">
                        {{ $isRegistering ? 'Crie sua conta' : 'Acesse sua conta' }}
                    </h2>
                    <p class="mt-2 text-sm leading-6 text-slate-600">
                        {{ $isRegistering ? 'Preencha seus dados para começar.' : 'Entre para administrar seu cardápio digital.' }}
                    </p>
                </div>

                <form wire:submit="{{ $isRegistering ? 'register' : 'authenticate' }}" class="space-y-5">
                    @if ($isRegistering)
                        <div>
                            <label for="name" class="mb-2 block text-sm font-semibold text-slate-700">Seu nome</label>
                            <input id="name" type="text" wire:model="name" autocomplete="name" required
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-violet-500 focus:ring-4 focus:ring-violet-100"
                                placeholder="Como podemos chamar você?">
                            @error('name') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                        </div>
                    @endif

                    <div>
                        <label for="email" class="mb-2 block text-sm font-semibold text-slate-700">E-mail</label>
                        <input id="email" type="email" wire:model="email" autocomplete="email" required
                            class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-violet-500 focus:ring-4 focus:ring-violet-100"
                            placeholder="voce@exemplo.com">
                        @error('email') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="password" class="mb-2 block text-sm font-semibold text-slate-700">Senha</label>
                        <input id="password" type="password" wire:model="password" autocomplete="{{ $isRegistering ? 'new-password' : 'current-password' }}" required
                            class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-violet-500 focus:ring-4 focus:ring-violet-100"
                            placeholder="{{ $isRegistering ? 'Mínimo de 8 caracteres' : 'Sua senha' }}">
                        @error('password') <p class="mt-1.5 text-sm text-red-600">{{ $message }}</p> @enderror
                    </div>

                    @if ($isRegistering)
                        <div>
                            <label for="password_confirmation" class="mb-2 block text-sm font-semibold text-slate-700">Confirme sua senha</label>
                            <input id="password_confirmation" type="password" wire:model="password_confirmation" autocomplete="new-password" required
                                class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-violet-500 focus:ring-4 focus:ring-violet-100"
                                placeholder="Digite a senha novamente">
                        </div>
                    @else
                        <label class="flex items-center gap-2 text-sm text-slate-600">
                            <input type="checkbox" wire:model="remember" class="rounded border-slate-300 text-violet-700 focus:ring-violet-500">
                            Manter conectado
                        </label>
                    @endif

                    <button type="submit" wire:loading.attr="disabled"
                        class="flex w-full items-center justify-center rounded-xl bg-violet-700 px-5 py-3.5 font-bold text-white shadow-lg shadow-violet-200 transition hover:bg-violet-800 focus:outline-none focus:ring-4 focus:ring-violet-200 disabled:cursor-wait disabled:opacity-70">
                        <span wire:loading.remove>{{ $isRegistering ? 'Criar minha conta' : 'Entrar' }}</span>
                        <span wire:loading>Carregando...</span>
                    </button>
                </form>

                <p class="mt-6 text-center text-sm text-slate-600">
                    {{ $isRegistering ? 'Já tem uma conta?' : 'Ainda não tem uma conta?' }}
                    <button type="button" wire:click="switchMode" class="font-bold text-violet-700 hover:text-violet-900">
                        {{ $isRegistering ? 'Fazer login' : 'Cadastre-se' }}
                    </button>
                </p>
            </div>
            <p class="mt-5 text-center text-xs leading-5 text-slate-500">
                Ao continuar, você concorda com nossos termos de uso e política de privacidade.
            </p>
        </div>
    </section>
</main>
