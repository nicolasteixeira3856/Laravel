<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem</title>
</head>
<body>
    <h1>Listar Clientes</h1>
    <a href="/admin/client/form-cadastrar">Novo cliente</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->name}}</td>
                    <td>{{$client->email}}</td>
                    <td>
                        <a href="{{"/admin/client/{$client->id}/form-editar"}}">Editar</a>
                    </td>
                    <td>
                        <a href="{{"/admin/client/{$client->id}/excluir"}}" onclick="event.preventDefault();if(confirm('Deseja excluir este registro?')){window.location.href='{{"/admin/client/{$client->id}/excluir"}}'}">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>