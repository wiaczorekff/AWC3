<h1>Detalhes da categoria: {{ $category->title}}</h1>

<h2>Posts associados a esta Categoria:</h2>
@if ($category->posts->count() > 0)
    <ul>
        @foreach ($category->posts as $post)
            <li>
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
@else
    <p>Nenhum post associado a esta categoria.</p>
@endif

<a href="{{ route('categories.edit', $category->id) }}">Editar</a>
<form method="POST" action="{{ route('categories.destroy', $category->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Confirmar Exclusão</button>
</form>
<a href="{{ route('categories.index') }}">Voltar para a Listagem de Posts</a>