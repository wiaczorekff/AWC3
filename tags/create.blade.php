<form action="{{route('tags.store')}}" method="POST">
    @csrf
    titulo: <input type="text" name="title"></br>
    <button type="submit">enviar</button>
</form>