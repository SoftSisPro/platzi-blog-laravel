@php
    $title = 'Editar Post';
@endphp
<x-header :title="$title">
    <form action="{{ route('posts.update', $post)}}" method="post">
        @method('PUT')
        @include('posts._form')
    </form>
</x-header>
