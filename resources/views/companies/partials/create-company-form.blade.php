<section>
    <header class="flex flex-row justify-between items-center">
        <div class="flex flex-col">
            <h2 class="text-sm font-medium text-gray-900 dark:text-gray-100">
                {{ __('Registrar nova empresa') }}
            </h2>
            <p class="mt-1 text-gray-600 dark:text-gray-400">
                {{ __('Adicione uma nova empresa para registrar suas horas.') }}
            </p>
        </div>

        <button class="mr-6 w-10 h-10 rounded-lg bg-slate-700" id="btnRegisterCompany">
            <i class="block text-sm text-gray-500 ti ti-chevron-right"></i>
        </button>
    </header>
    <div id="frmRegisterCompany" hidden>
        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('patch')

            <div>
                <x-input-label for="name" :value="__('Nome')" />
                <x-text-input id="name" name="name" type="text" class="block mt-1 w-full" :value="old('name')"
                    required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div>
                <x-input-label for="email" :value="__('E-mail')" />
                <x-text-input id="email" name="email" type="email" class="block mt-1 w-full" :value="old('email')"
                    required autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
            </div>

            <div>
                <x-input-label for="cnpj" :value="__('CNPJ')" />
                <x-text-input id="cnpj" name="cnpj" type="text" class="block mt-1 w-full" :value="old('cnpj')"
                    required autocomplete="cnpj" />
                <x-input-error class="mt-2" :messages="$errors->get('cnpj')" />
            </div>

            <div>
                <x-input-label for="price" :value="__('Valor hora')" />
                <x-text-input id="price" name="price" type="text" class="block mt-1 w-full" :value="old('price')"
                    required autocomplete="price" />
                <x-input-error class="mt-2" :messages="$errors->get('price')" />
            </div>

            <div class="flex gap-4 items-center">
                <x-primary-button>{{ __('Cadastrar') }}</x-primary-button>

                @if (session('status') === 'company-register-success')
                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                        class="text-gray-600 dark:text-gray-400">{{ __('Registrado realizado com sucesso.') }}</p>
                @endif
            </div>
        </form>
    </div>
</section>

<script>
    $('#btnRegisterCompany').click(function() {
        $('#frmRegisterCompany').toggle(300)
        $(this).toggleClass('bg-slate-700 bg-slate-600');
        const icon = $(this).find('i');
        icon.toggleClass('rotate-90');
    });
</script>
