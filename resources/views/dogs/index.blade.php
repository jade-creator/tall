<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Liked Dog Breeds') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-500 w-full">
                            <thead>
                            <tr>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                                    {{ trans('User') }}
                                </th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                                    {{ trans('Liked Dog Breeds') }}
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-500">
                            @forelse ($data as $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">
                                        {{ $item->name }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">
                                        <ul>
                                            @forelse ($item->dogs as $dog)
                                            <li>
                                                <img width="200" src="{{ $dog->image }}" alt="{{ $dog->name }}" title="{{ $dog->name }}">
                                                <div class="mt-2 mb-4">Breed: {{ $dog->name }}</div>
                                            </li>
                                            @empty
                                            <li>
                                                No record found.
                                            </li>
                                            @endforelse
                                        </ul>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white text-center">
                                        {{ trans('No Record Found.') }}
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
