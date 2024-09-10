@php
    $title = 'Posts';
@endphp
<x-header :title="$title">
    <table class="w-full mb-4">
        @foreach ($posts as $post)
        <tr class="border-b border-gray-200 text-sm">
            <td class="px-6 py-4">{{ $post->title }}</td>
            <td class="px-6 py-4 text-center">
                <a href="{{ route('posts.edit', $post)}}" class="text-indigo-600">Editar</a>
            </td>
            <td class="px-6 py-4 text-center">
                <form action="{{ route('posts.destroy', $post)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 rounded text-white px-3 py-1" onclick="return confirm('¿Estás seguro de eliminar este post?')">
                        Eliminar
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $posts->links() }}

</x-header>



