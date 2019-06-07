<?php

use Illuminate\Http\Request;

//MVC - Model, view, controller.

Route::get('/', function () {
    return view('welcome'); //Helper
});

Route::get('/cliente/cadastrar', function () {
    $nome = 'Nicolas';
    $idade = 20;
    /*return view('cadastrar', [
        'nome' => 'Nicolas'
    ]);*/
    return view('cliente.cadastrar', compact('nome', 'idade'));
});


/*
//Passando parametros - parametro opcional
Route::get('/cliente', function () {
//CSRF Token
$csrfToken = csrf_token();
$html = <<<HTML
    </html>
        <form method="post" action="/cliente/cadastrar">
            <input type="hidden" name="_token" value="$csrfToken">
            <input type="text" name="name">
            <button type="submit">Enviar</button>
        </form>
    </html>
HTML;
return $html;
});
    
Route::post('/cliente/cadastrar', function(Request $request){
    //echo $request->get('name');
    echo $request->name;
});
*/ 
/*Route::get('/usuario/{nome?}', function ($nome = "user") {
    return "Bem-vindo ".$nome;
});*/

//Skeleton App - CoC Convention over Configuration