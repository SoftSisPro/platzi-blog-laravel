
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex items-center justify-between">
            {{ $title ?? "Dashboard" }}
            @if(request()->routeIs('posts.index'))
                <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white rounded px-2 py-1 text-xs">Crear Post</a>
            @endif
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>