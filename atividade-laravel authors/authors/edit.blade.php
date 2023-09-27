<h1>Editar autor: {{ $author->title }}</h1>

<form method="POST" action="{{ route('authors.update', $author->id) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="title">Nome do autor</label>
        <input type="text" id="title" name="title" 
               placeholder="Digite o nome da categoria" 
               value="{{ $author->title }}">
    </div>
    <button type="submit">Salvar Alterações</button>
</form>