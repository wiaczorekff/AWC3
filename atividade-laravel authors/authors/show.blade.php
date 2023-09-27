<h1>Detalhes da categoria: {{ $author->title}}</h1>

<h2>Posts associados a esta Categoria:</h2>
@if ($author->books->count() > 0)
    <ul>
        @foreach ($author->books as $book)
            <li>
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
@else
    <p>Nenhum autor associado</p>
@endif

<a href="{{ route('authors.edit', $book->id) }}">Editar</a>
<form method="POST" action="{{ route('authors.destroy', $author->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Confirmar Exclusão</button>
</form>
<a href="{{ route('authors.index') }}">Voltar para a Listagem de Posts</a>