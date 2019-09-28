<?php

Route::get('/', 'AtletaController@index');

Route::resource('atleta','AtletaController');

Route::any('busca', 'AtletaController@busca');

Route::get('add-atleta', function () {
    return view('add');
});
