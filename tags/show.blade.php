<h1>{{$tag->title}}</h1>
<a href="{{route('tags.edit', $tag->id)}}">editar</a>
<form method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">apagar</button>
</form>