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

Route::get('/', 'PagesController@index');
Route::get('venta-y-renta-de-maquinaria', 'PagesController@venta_renta');
Route::get('venta-de-refacciones', 'PagesController@refacciones');
Route::get('piston-falange-320-sr', 'PagesController@piston_falange_320');
Route::get('refac-01', 'PagesController@refac_01');
Route::get('empresa', 'PagesController@empresa');
Route::get('contacto', 'PagesController@contacto');

