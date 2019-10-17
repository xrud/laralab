<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

           .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
          <pre>1 -> Criar um controller
php artisan make:controller meuController
2 -> Criar uma rota
Route::get('/meuController', 'meuController@meuMetodo');
3 -> Criar uma Model
Exemplo:
public function listagem(){
return (object)[
(object)["nome"=>"Dado1"],
(object)["nome"=>"Dado2"],
(object)["nome"=>"Dado3"],
];
}

php artisan make:model minhaModel

4 -> Importando model em controller
use App\minhaModel;
5 -> Instanciando model em controller dentro da classe
public function meuMetodo(){
$instancia = new minhaModel();
$lista = $instancia->listagem();
// para testar: dd($lista);
return view('minhaView', compact('lista'));
}
6 -> Criar view: minhaView.blade.php

</pre>
<div>
@foreach ($lista as $key => $value)
<h3>{{$value->nome}}</h3>
@endforeach
</div>
          </pre>
        </div>
    </body>
</html>
