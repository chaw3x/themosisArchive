<?php

/**
 * Application routes.
 */
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/listado', function () {
//     return view('listado');
// });
Route::get('/listado', 'ListadoController@index');
