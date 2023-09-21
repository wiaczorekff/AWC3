<h1>{{ $post->title }}</h1>
<h2>{{ $post->category->title }}</h2>
<p>{{ $post->content }}</p>
<p><b>Tags:</b>
@foreach ($post->tags as $tag)
    <span>{{ $tag->title }}</span>
@endforeach
</p>

<a href="{{ route('posts.edit', $post->id) }}">Editar</a>
<form method="POST" action="{{ route('posts.destroy', $post->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Confirmar Exclusão</button>
</form>
<a href="{{ route('posts.index') }}">Voltar para a Listagem de Posts</a>