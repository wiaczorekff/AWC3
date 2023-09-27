<table class="table">
    <thead>
        <tr>
            <th>Categoria</th>
            <th>Quantidade de autores</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>
                <a href="{{ route('authors.show', $author->id) }}">
                    {{ $author->title }}
                </a>
            </td>
            <td>{{ $book->books->count() }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('authors.create') }}">Criar Novo autor</a>