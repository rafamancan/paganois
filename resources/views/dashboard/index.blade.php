<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div
                class="flex overflow-hidden flex-row justify-between items-center bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    Seja bem-vindo, {{ Auth::user()->name }}!
                </div>
                <button class="mr-6 w-10 h-10 rounded-lg bg-slate-700 toggleAllView">
                    <i class="block text-sm text-gray-500 ti ti-eye-closed"></i>
                </button>

            </div>
        </div>
    </div>

    <div class="pb-12">
        <div class="flex flex-row gap-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-card.simple title="{{ __('Horas no mês') }}" value="135" toggle="hide" />
            <x-card.simple title="{{ __('Horas restantes') }}" value="14" toggle="show" />
            <x-card.simple title="{{ __('Projetos ativos') }}" value="3" toggle="hide" />
            <x-card.simple title="{{ __('Valor a receber') }}" value="R$ 13.131,13" toggle="hide" />
        </div>
    </div>
</x-app-layout>

<script>
    const iconClasses = 'ti-eye ti-eye-closed'
    const contentClasses = 'block hidden';

    function toggleIcon(el, force = null) {
        if (!force) {
            el.toggleClass(iconClasses);
            return;
        }

        if (force === 'show') {
            el.removeClass('ti-eye-closed').addClass('ti-eye');
            return;
        }

        el.removeClass('ti-eye').addClass('ti-eye-closed');
    }

    function toggleContent(el, force = null) {
        const value = el.parent().parent().find('.cardContentValue');
        const hideValue = el.parent().parent().find('.cardContentHide');

        if (!force) {
            value.toggleClass(contentClasses);
            hideValue.toggleClass(contentClasses);
            return;
        }

        if (force === 'show') {
            value.removeClass('hidden').addClass('block');
            hideValue.removeClass('block').addClass('hidden');
            return;
        }

        value.removeClass('block').addClass('hidden');
        hideValue.removeClass('hidden').addClass('block');
    }

    $('.toggleView').on('click', function() {
        toggleIcon($(this));
        toggleContent($(this));
    });

    $('.toggleAllView').on('click', function() {
        const icon = $(this).children();
        const force = icon.hasClass('ti-eye-closed') ? 'show' : 'hide';

        toggleIcon(icon);

        const icons = $('.toggleView');
        for (let i = 0; i < icons.length; i++) {
            toggleIcon($(icons[i]), force);
            toggleContent($(icons[i]), force);
        }
    });
</script>
