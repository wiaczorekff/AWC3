<h1>Editar Categoria: {{ $category->title }}</h1>

<form method="POST" action="{{ route('categories.update', $category->id) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="title">Nome da Categoria</label>
        <input type="text" id="title" name="title" 
               placeholder="Digite o nome da categoria" 
               value="{{ $category->title }}">
    </div>
    <button type="submit">Salvar Alterações</button>
</form>