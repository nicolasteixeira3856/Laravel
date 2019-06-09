<?php

use Illuminate\Http\Request;

//MVC - Model, view, controller.
//StudlyCaps

Route::get('/', function () {
    return view('welcome'); //Helper
    
});

//Agrupamento de rotas -> Área aberta / Área admin
Route::group(['prefix' => '/'], function(){
    Route::get('/cliente/cadastrar', 'ClientsController@cadastrar');
    Route::get('/for-if/{value}', function($value){
        $myarray = array('Valor1', 'Valor2', 'Valor3');
        return view('for-if', compact('value', 'myarray'));
    });
    Route::get('/blade', function () {
        $nome = 'Nicolas';
        $idade = 20;
        $test = 'Teste';
        return view('test', compact('nome', 'idade', 'test'));
    });
    Route::get('/env', function () {
        var_dump(env("NOME", 'xpto'));
    });
});

Route::group(['prefix' => 'admin'], function(){
    Route::group(['prefix' => '/cliente'], function(){
        Route::get('/cadastrar', 'ClientsController@cadastrar');
        
    });
});



/*
Route::get('/cliente/cadastrar', function () {
    $nome = 'Nicolas';
    $idade = 20;
    /*return view('cadastrar', [
        'nome' => 'Nicolas'
    ]);
    return view('cliente.cadastrar', compact('nome', 'idade'));
});

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