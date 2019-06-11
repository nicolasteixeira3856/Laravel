<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
    <h1>Editar cliente</h1>
    <form method="POST" action="{{"/admin/client/{$client->id}/editar"}}">
        {!! csrf_field() !!}
        <input type="text" placeholder="nome" name="name" value="{{$client->name}}">
        <input type="text" placeholder="email" name="email" value="{{$client->email}}">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>