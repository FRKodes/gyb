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
Route::get('refaccion/gator-primario-24x36', 'PagesController@gator_primario_24x36');
Route::get('refaccion/mantle-bowl-liner-hp200', 'PagesController@mantle_bowl_liner_hp200');
Route::get('refaccion/mantle-bowl-liner-hp300', 'PagesController@mantle_bowl_liner_hp300');
Route::get('refaccion/metso-primario-c106', 'PagesController@metso_primario_c106');
Route::get('refaccion/sandvik-primario-1208', 'PagesController@sandvik_primario_1208');
Route::get('refaccion/gator-impacto-1013', 'PagesController@gator_impacto_1013');
Route::get('refaccion/gator-impacto-1315', 'PagesController@gator_impacto_1315');
Route::get('refaccion/metso-impacto-lt1213', 'PagesController@metso_impacto_lt1213');
Route::get('refaccion/metso-primario-lt120', 'PagesController@metso_primario_lt120');
Route::get('refaccion/gator-rodillos-varias-medidas', 'PagesController@gator_rodillos_varias_medidas');
Route::get('maquinaria/excavadora-210-LC', 'PagesController@excavadora_210_LC');
Route::get('maquinaria/excavadora-320-c', 'PagesController@excavadora_320_c');
Route::get('maquinaria/excavadora-320-CL', 'PagesController@excavadora_320_CL');
Route::get('maquinaria/excavadora-350-lc', 'PagesController@excavadora_350_lc');
Route::get('maquinaria/motoconformadora-140-h', 'PagesController@motoconformadora_140_h');
Route::get('maquinaria/motoconformadora-845-b', 'PagesController@motoconformadora_845_b');
Route::get('maquinaria/retroexcavadora-416-e', 'PagesController@retroexcavadora_416_e');
Route::get('maquinaria/retroexcavadora-580-m', 'PagesController@retroexcavadora_580_m');
Route::get('maquinaria/retroexcavadora-super-n', 'PagesController@retroexcavadora_super_n');
Route::get('empresa', 'PagesController@empresa');
Route::get('contacto', 'PagesController@contacto');

