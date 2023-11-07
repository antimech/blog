<x-guest-layout>
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ $post->title }}
    </h2>

    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
        {{ $post->body }}
    </p>
    <p class="mt-4 text-gray-600 dark:text-gray-400">
        {{ __('Created At') }}: {{ date('M j, Y h:ia', strtotime($post->created_at)) }}
    </p>
    <p class="text-gray-600 dark:text-gray-400">
        {{ __('Last Updated') }}: {{ date('M j, Y h:ia', strtotime($post->updated_at)) }}
    </p>
    <p class="text-gray-600 dark:text-gray-400">
        {{ __('Author') }}: {{ $post->author->name }}
    </p>
</x-guest-layout>
