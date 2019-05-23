<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**CEO PRODUÇÃO USUARIOS */
Route::resource('/usuarios', 'UsuarioController');

/**CEO PRODUÇÃO MANUAL */
Route::resource('/manual', 'ProducaoManualController');
/**CEO PRODUÇÃO AMBULATORIAL */
Route::resource('/ambulatorial', 'ProducaoAmbulatorialController');

/*** Route::resource('/unidades', 'CeoUnidadeController'); */