<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div>
                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        {{ $post->body }}
                    </p>
                    <p class="mt-4 text-gray-600 dark:text-gray-400">
                        {{ __('Created At') }}: {{ date('M j, Y h:ia', strtotime($post->created_at)) }}
                    </p>
                    <p class="text-gray-600 dark:text-gray-400">
                        {{ __('Last Updated') }}: {{ date('M j, Y h:ia', strtotime($post->updated_at)) }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
