<h1>Editar Tag: {{ $post->title }}</h1>

<form method="POST" action="{{ route('posts.update', $post->id) }}">
    @csrf
    @method('PUT')
    <div>
      <label for="title">Title:</label>
      <input type="text" name="title" value="{{ $post->title }}" required>
    </div>
    <div>
      <label for="content">Conteúdo:</label>
      <textarea name="content" required>{{ $post->content }}</textarea>
    </div>
    
    <!-- Campo para a categoria -->
    <div>
      <label for="category_id">Categoria:</label>
      <select name="category_id" required>
          @foreach ($categories as $category)
                <option value="{{ $category->id }}" 
                    {{ $category->id == $post->category_id ? 'selected' : '' }}>
                    {{ $category->title }}
                </option>
          @endforeach
      </select>
    </div>

    <!-- Campos para tags (seleção múltipla) -->
    <div>
      <label for="tags">Categoria:</label>
      <select name="tags[]" multiple>
          @foreach ($tags as $tag)
                <option value="{{ $tag->id }}" 
                    {{ in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : '' }}>
                    {{ $tag->title }}
                </option>
          @endforeach
      </select>
    </div>
    <button type="submit">Atualizar Post</button>
</form>

<a href="{{ route('posts.index') }}">Voltar para a Listagem de Posts</a>