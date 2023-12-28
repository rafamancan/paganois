<section>
    <header>
        <h2 class="text-sm font-medium text-gray-900 dark:text-gray-100">
            {{ __('Lista de empresas cadastradas') }}
        </h2>

        <p class="mt-1 text-gray-600 dark:text-gray-400">
            {{ __('Aqui estão todas as empresas que estão registradas.') }}
        </p>
    </header>
    <div class="container mx-auto mt-6">
        <x-table.filter />

        <div class="overflow-x-auto px-4 -mx-4 sm:px-8 sm:-mx-8">
            <div class="inline-block overflow-hidden min-w-full rounded-lg shadow">
                <table class="min-w-full leading-normal">
                    <x-table.header :columns="['Empresa', 'CNPJ', 'Último registro', 'Situação', '']" />
                    <tbody>
                        <x-table.row :values="[
                            'NoPing',
                            '32.297.896/0001-09',
                            '27/12/23 17:00',
                            '[pill][enable]:Ativa',
                            '[button][folder-open][https://google.com]',
                        ]" />
                        <x-table.row :values="[
                            'Rafa Company',
                            '32.297.896/0001-09',
                            '27/12/23 17:00',
                            '[pill][disable]:Arquivada',
                            '[button][folder-open][https://google.com]',
                        ]" />
                    </tbody>
                </table>

                <x-table.pagination showing="5" total="30" />
            </div>
        </div>
    </div>
</section>
