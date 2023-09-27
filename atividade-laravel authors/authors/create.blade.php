<h1>Adicionar novo autor</h1>
<form method="POST" action="{{ route('authors.store') }}">
    @csrf
    <div>
        <label for="title">Nome do autor</label>
        <input type="text" id="title" name="title" 
               placeholder="Digite o nome do autor" value="{{ old('title') }}">
    </div>
    <button type="submit">adicionar</button>
</form>