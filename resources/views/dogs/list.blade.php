<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Available Dog Breeds') }}
            </h2>

            <a href="{{ route('posts.create') }}" class="bg-indigo-700 hover:bg-indigo-800 text-white text-sm py-1 px-2 dark:text-gray-200 font-bold rounded">Add Post</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <dogs-list-component />
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
