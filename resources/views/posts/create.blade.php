@php
    $title = 'Crear Post';
@endphp
<x-header :title="$title">
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        @include('posts._form')
    </form>
</x-header>
