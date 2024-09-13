@extends('template')

@section('content')

<div class="max-w-3xl mx-auto">
    <div class="flex justify-between items-center border-b border-gray-200 pb-3">
        <a href="{{ route('home') }}" class="text-blue-700">Regresar</a>
        <span class="bg-gray-200 text-gray-500 text-xs rounded-lg px-2 py-1">
        Publicado: {{ $post->created_at->format('d/m/Y') }}
        </span>
    </div>
    <h1 class="text-5xl mb-8 mt-2">{{ $post->title }}</h1>
    <p class="leading-loose text-lg text-gray-700">{{ $post->body }}</p>
</div>

@endsection
