<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{$nome.$idade}}
    <br>
    {{ 2 + 2 }}
    <br>
    {{isset($test)?$test:"Outro Valor"}}
    <br>
    {{$test??"Outro Valor"}}
    <br>
    {{$test or "Outro Valor"}}
    <br><br>
    {{ "<h1>Cu</h1>" }}
    <br><br>
    {!! "<h1>Cu</h1>" !!}
</body>
</html>