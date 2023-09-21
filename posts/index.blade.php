<h1>Listagem de Posts</h1>
<a href="{{ route('posts.create') }}">Criar Novo Post</a>

@foreach ($posts as $post)
    <h2>
        <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a> | {{ $post->category->title }}
    </h2>
    <p>{{ $post->content }}</p>
    <p><b>Tags:</b>
        @foreach ($post->tags as $tag)
        <span>{{ $tag->title }}</span>
        @endforeach
    </p>
    <hr>
    @endforeach
</ul>