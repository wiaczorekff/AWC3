<form action={{ route('products.store') }} method="POST">
@csrf
<div>
        <label>nome do produto </label>
        <input type="text" name="nome">
</div>

<div>
        <label>descrição </label>
        <input type="text" name="descricao">
</div>
<div>
        <label>preço</label>
        <input type="text" name="preco">
</div>
<div>
    <select name="category_id">
        @foreach ($categories as $category)
        <option value="{{$category -> id}}"> {{$category->nome}}</option>
        @endforeach
    </select>
</div>

        <button type="submit">salvar</button>

</form>