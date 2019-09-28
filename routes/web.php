<?php

Route::get('/', 'AtletaController@index');

Route::get('add-atleta', function () {
    return view('add');
});

Route::resource('atleta','AtletaController');



