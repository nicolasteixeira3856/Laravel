<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Passando parametros - parametro opcional
Route::get('/cliente', function () {
//CSRF Token
$html = <<<HTML
$csrfToken = csrf_token();
    </html>
        <form action="post" action="/cliente/cadastrar">
            <input type="hidden" name="_token" value="$csrfToken">
            <input type="text" name="name">
            <button type="submit">Enviar</button>
        </form>
    </html>
HTML;
    return $html;
});

Route::post('/cliente/cadastrar', function(){
    echo 'Cleiten';
});


/*Route::get('/usuario/{nome?}', function ($nome = "user") {
    return "Bem-vindo ".$nome;
});*/

//Skeleton App - CoC Convention over Configuration