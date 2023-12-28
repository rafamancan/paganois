<x-app-layout>
    <div class="py-12">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg dark:bg-gray-800">
                @include('companies.partials.create-company-form')
            </div>

            <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg dark:bg-gray-800">
                @include('companies.partials.list-company')
            </div>
        </div>
    </div>
</x-app-layout>
