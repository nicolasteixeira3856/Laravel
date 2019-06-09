<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar</title>
</head>
<body>
    <h1>Criar cliente</h1>
    <form method="POST" action="/admin/client/cadastrar">
        {!! csrf_field() !!}
        <input type="text" placeholder="nome" name="name">
        <input type="text" placeholder="email" name="email">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>