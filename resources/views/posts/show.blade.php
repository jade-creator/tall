<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('View Post') }}
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
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="py-5 sm:py-6">
                                <label
                                    class="block font-medium text-sm text-gray-700 dark:text-white">
                                    Title:
                                </label>
                                <p class="mt-4 dark:text-white">
                                    {{$post->title}}
                                </p>
                            </div>

                            <div class="py-5 sm:py-6">
                                <label
                                    class="block font-medium text-sm text-gray-700 dark:text-white">
                                    Content:
                                </label>
                                <p class="mt-4 dark:text-white">
                                    {{$post->content}}
                                </p>
                            </div>

                            <div class="py-5 sm:py-6">
                                <label
                                    class="block font-medium text-sm text-gray-700 dark:text-white">
                                    Date:
                                </label>
                                <p class="mt-4 dark:text-white">
                                    {{$post->date->format('M. d, Y')}}
                                </p>
                            </div>

                            <div class="flex items-center justify-end py-3 text-right sm:py-6">
                                <a role="button" href="{{route('posts.index')}}" class="inline-flex items-center px-4 py-2 bg-indigo-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                    Back
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
