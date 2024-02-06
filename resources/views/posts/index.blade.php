<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Posts List') }}
            </h2>

            <a href="{{ route('posts.create') }}" class="bg-indigo-700 hover:bg-indigo-800 text-white text-sm py-1 px-2 dark:text-gray-200 font-bold rounded">Add Post</a>
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
                                <th scope="col" width="50" class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                                    {{ trans('ID') }}
                                </th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                                    {{ trans('Title') }}
                                </th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                                    {{ trans('Content') }}
                                </th>
                                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                                    {{ trans('Date') }}
                                </th>
                                <th scope="col" width="200" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">

                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-500">
                            @forelse ($posts as $post)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">
                                        {{ $post->id }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">
                                        {{ $post->title }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white text-ellipsis overflow-hidden">
                                        {{ $post->content }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white text-ellipsis overflow-hidden">
                                        {{ $post->date->format('M. d, Y') }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <a
                                            href="{{ route('posts.show', $post->id) }}"
                                            class="text-blue-600 hover:text-blue-900 mb-2 mr-2">
                                            {{ trans('View') }}
                                        </a>
                                        <a
                                            href="{{ route('posts.edit', $post->id) }}"
                                            class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">
                                            {{ trans('Edit') }}
                                        </a>
                                        <livewire:delete-modal :action="route('posts.destroy', $post->id)"/>
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
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
