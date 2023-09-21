<h1>Criar Novo Post</h1>

<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <div>
      <label for="title">Title:</label>
      <input type="text" name="title" value="{{ old('title') }}" required>
    </div>
    <div>
      <label for="content">Conteúdo:</label>
      <textarea name="content" required>{{ old('content') }}</textarea>
    </div>
    
    <!-- Campo para a categoria -->
    <div>
      <label for="category_id">Categoria:</label>
      <select name="category_id" required>
          @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->title }}</option>
          @endforeach
      </select>
    </div>

    <!-- Campos para tags (seleção múltipla) -->
    <div>
      <label for="tags">Categoria:</label>
      <select name="tags[]" multiple>
          @foreach ($tags as $tag)
              <option value="{{ $tag->id }}">{{ $tag->title }}</option>
          @endforeach
      </select>
    </div>

    <button type="submit">Criar Post</button>
</form>

<a href="{{ route('posts.index') }}">Voltar para a Listagem de Posts</a>