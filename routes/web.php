<?php


Route::get('/', function () {
    return view('welcome');
});

//grupo de rotas
Route::middleware([])->group(function () {

    //prefixo de rotas
    Route::prefix('admin')->group(function() {

        Route::get('/financeiro', function() {
            return 'financeiro';
        });

        Route::get('/comercial', function() {
            return 'comercial';
        });

        Route::get('/operacional', function() {
            return 'operacional';
        });
    });
});


//any aceita todos os verbos http(GET,POST,PUT,PATCH,DELETE)
Route::any('/any', function() {
    return 'any';
});

//match aceita apenas os verbos http(GET,POST,PUT,PATCH,DELETE) especificados
Route::match(['post', 'delete'], '/match', function() {
    return 'match';
});

Route::group(['prefix' => 'estruturas'], function () {

    Route::get('/controles', function() {

        $variavel = 123;

        return view('estruturas.controles', compact('variavel'));
    });

    Route::get('/repeticoes', function() {

        $devs = ['will', 'felipe', 'joao', 'maria', 'isa'];
        $devss = [];

        return view('estruturas.repeticoes', compact('devs', 'devss'));
    });
});



