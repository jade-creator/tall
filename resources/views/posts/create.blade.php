<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <h1 class="text-2xl font-medium text-gray-900 dark:text-white">
                        Post Details
                    </h1>

                    <div class="mt-6 text-gray-500 dark:text-gray-400">
                        <form method="post" action="{{ route('posts.store') }}">
                            @csrf
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="py-5 sm:py-6">
                                    <label
                                        for="title"
                                        class="block font-medium text-sm text-gray-700 dark:text-white">
                                        Title
                                        <i class="text-red-500">*</i>
                                    </label>
                                    <input
                                        type="text"
                                        name="title"
                                        id="title"
                                        class="form-input rounded-md shadow-sm mt-1 block w-full dark:text-white dark:bg-gray-900"
                                        value="{{ old('title', '') }}" />
                                    @error('title')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="py-5 sm:py-6">
                                    <label
                                        for="content"
                                        class="block font-medium text-sm text-gray-700 dark:text-white">
                                        Content
                                        <i class="text-red-500">*</i>
                                    </label>
                                    <textarea
                                        name="content"
                                        id="content"
                                        class="form-input rounded-md shadow-sm mt-1 block w-full dark:text-white dark:bg-gray-900">{{ old('content', '') }}</textarea>
                                    @error('content')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="py-5 sm:py-6">
                                    <label
                                        for="date"
                                        class="block font-medium text-sm text-gray-700 dark:text-white">
                                        Date
                                        <i class="text-red-500">*</i>
                                    </label>
                                    <input
                                        type="date"
                                        name="date"
                                        id="date"
                                        class="form-input rounded-md shadow-sm mt-1 block w-full dark:text-white dark:bg-gray-900"
                                        value="{{ old('date', '') }}" />
                                    @error('date')
                                        <p class="text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="flex items-center justify-end py-3 text-right sm:py-6">
                                    <button class="inline-flex items-center px-4 py-2 bg-indigo-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                        Create
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
