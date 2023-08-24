<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf 
        titulo: <input type="text" name="title"> <br>
        conteudo <input type="text" name="content"> <br>
        <button type="submit">enviar</button>
    </form>
</body>
</html>