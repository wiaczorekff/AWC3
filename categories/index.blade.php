<table class="table">
    <thead>
        <tr>
            <th>Categoria</th>
            <th>Quantidade de Posts</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>
                <a href="{{ route('categories.show', $category->id) }}">
                    {{ $category->title }}
                </a>
            </td>
            <td>{{ $category->posts->count() }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('categories.create') }}">Criar Novo Categoria</a>