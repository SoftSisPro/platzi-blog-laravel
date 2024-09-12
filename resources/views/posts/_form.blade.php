@csrf

<label class="uppercase text-gray-700 text-xs">Titulo</label>
<span class="text-red-600 text-xs">@error('title') {{ $message }} @enderror</span>
<input type="text" name="title" class="rounded bg-gray-100 border-gray-200 w-full mb-4" placeholder="Escriba el Titulo de Post" value="{{ old('title', $post->title??null) }}">

<label class="uppercase text-gray-700 text-xs">Slug</label>
<span class="text-red-600 text-xs">@error('slug') {{ $message }} @enderror</span>
<input type="text" name="slug" class="rounded bg-gray-100 border-gray-200 w-full mb-4" placeholder="Escriba el Slug del Post" value="{{ old('slug', $post->slug??null) }}">

<label class="uppercase text-gray-700 text-xs">Contenido</label>
<span class="text-red-600 text-xs">@error('body') {{ $message }} @enderror</span>
<textarea name="body" rows="5" class="rounded bg-gray-100 border-gray-200 w-full mb-4" placeholder="Escriba el Contenido del Post">
    {{ old('body', $post->body??null) }}
</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="text-blue-500 hover:text-blue-700">Volver</a>
    <button type="submit" class="bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-600">Guardar</button>
</div>
