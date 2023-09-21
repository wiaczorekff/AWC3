<h1>Criar Nova Categoia</h1>
<form method="POST" action="{{ route('categories.store') }}">
    @csrf
    <div>
        <label for="title">Nome da Categoria</label>
        <input type="text" id="title" name="title" 
               placeholder="Digite o nome da categoria" value="{{ old('title') }}">
    </div>
    <button type="submit">Criar Categoria</button>
</form>