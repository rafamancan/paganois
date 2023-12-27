<x-app-layout>
    <x-slot name="header">
        <h2 class="text-sm font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Seja bem-vindo, {{ Auth::user()->name }}!
                </div>
            </div>
        </div>
    </div>

    <div class="pb-12">
        <div class="flex flex-row gap-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-card.simple title="{{ __('Horas no mês') }}" value="135" />
            <x-card.simple title="{{ __('Valor a receber') }}" value="R$ 13.131,13" />
            <x-card.simple title="{{ __('Horas restantes') }}" value="14" />
            <x-card.simple title="{{ __('Projetos ativos') }}" value="3" />
        </div>
    </div>
</x-app-layout>
