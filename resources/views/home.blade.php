@extends('template')

@section('content')
{{-- Destacados --}}
<div class="bg-blue-900 px-20 py-16 rounded-lg mb-8 relative overflow-hidden">
    <span class="text-xs uppercase text-blue-700 bg-blue-400 rounded-full px-2 py-1">Programación</span>
    <h1 class="text-3xl text-white mt-4">Blog</h1>
    <p class="text-sm text-blue-400 mt-2">Proyecto del Curso de Laravel de Plazi</p>
    <img src="{{ asset('image/dev.png') }}" width="250" class="absolute -right-5 -bottom-5 opacity-20">
</div>

<div class="px-4">
    <h1 class="text-2xl mb-8 text-blue-900">Mis Publicaciones</h1>
    <div class="grid grid-cols-1 gap-4 mb-4">
        @foreach ($posts as $post)
            <a href="{{ route('post', $post->slug) }}" class="rounded-lg bg-gray-100 px-6 py-4">
                <p class="text-xs flex items-center gap-2">
                    <span class="uppercase text-gray-700 bg-gray-200 px-3 py-1 rounded-full">Publicación</span>
                    <span>{{ $post->created_at->format('d/m/Y') }}</span>
                </p>
                <h2 class='mt-2 text-lg text-gray-900'>{{ $post->title}}</h2>
                <div class='text-xs text-gray-900 opacity-75 flex items-center gap-1 mt-2'>
                    <i class='fas fa-user-pen fa-fw'></i> {{ $post->user->name }}
                </div>
            </a>
        @endforeach
    </div>

    {{ $posts->links() }}
</div>

@endsection
