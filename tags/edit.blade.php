<form action="{{route('tags.update', $tag->id)}}" method="POST">
    @csrf
    @method("PUT")
    titulo: <input type="text" name="title" value="{{$tag->title}}"></br>
    <button type="submit">enviar</button>
</form>