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
Route::get('maquinaria/camion-articulado-cat-740', 'PagesController@camion_articulado_cat_740');
Route::get('maquinaria/camion-pipa-continental-20k-litros', 'PagesController@camion_pipa_continental_20k_litros');
Route::get('maquinaria/camion-volteo-14mts', 'PagesController@camion_volteo_14mts');
Route::get('maquinaria/cargador-frontal-case-721C', 'PagesController@cargador_frontal_case_721C');
Route::get('maquinaria/cargador-frontal-case-721e', 'PagesController@cargador_frontal_case_721e');
Route::get('maquinaria/cargador-frontal-cat-966', 'PagesController@cargador_frontal_cat_966');
Route::get('maquinaria/cono-secundario-metso-sobre-orugas', 'PagesController@cono_secundario_metso_sobre_orugas');
Route::get('maquinaria/cono-secundario-semifijo-414', 'PagesController@cono_secundario_semifijo_414');
Route::get('maquinaria/excavadora-hyundai', 'PagesController@excavadora_hyundai');
Route::get('maquinaria/excavadora-cat-320c', 'PagesController@excavadora_cat_320c');
Route::get('maquinaria/excavadora-doosan-225lx', 'PagesController@excavadora_doosan_225lx');
Route::get('maquinaria/excavadora-dossan-340', 'PagesController@excavadora_dossan_340');
Route::get('maquinaria/excavadora-komatsu-pc210', 'PagesController@excavadora_komatsu_pc210');
Route::get('maquinaria/excavadora-komatsu-pc350', 'PagesController@excavadora_komatsu_pc350');
Route::get('maquinaria/generador-cummins-125-kva', 'PagesController@generador_cummins_125_kva');
Route::get('maquinaria/generador-himmoinsa-245-kva', 'PagesController@generador_himmoinsa_245_kva');
Route::get('maquinaria/motoconformadora-case-485', 'PagesController@motoconformadora_case_485');
Route::get('maquinaria/motoconformadora-cat-140H', 'PagesController@motoconformadora_cat_140H');
Route::get('maquinaria/motoconformadora-champion-730a', 'PagesController@motoconformadora_champion_730a');
Route::get('maquinaria/planta-luz-yanmar', 'PagesController@planta_luz_yanmar');
Route::get('maquinaria/retroexcavadora-case-580m', 'PagesController@retroexcavadora_case_580m');
Route::get('maquinaria/retroexcabadora-cat-416e', 'PagesController@retroexcabadora_cat_416e');
Route::get('maquinaria/tractor-sobre-orugas-cat-dr8', 'PagesController@tractor_sobre_orugas_cat_dr8');
Route::get('maquinaria/tractor-sobre-orugas-komatsu-d155ax', 'PagesController@tractor_sobre_orugas_komatsu_d155ax');
Route::get('maquinaria/triturador-primario-gator-30x42', 'PagesController@triturador_primario_gator_30x42');
Route::get('maquinaria/trituradora-impacto-secundaria-gator', 'PagesController@trituradora_impacto_secundaria_gator');
Route::get('maquinaria/trituradora-secundaria-quijada-sfk', 'PagesController@trituradora_secundaria_quijada_sfk');
Route::get('maquinaria/vibrocompactador-ingersold-rand', 'PagesController@vibrocompactador_ingersold_rand');
Route::get('empresa', 'PagesController@empresa');
Route::get('contacto', 'PagesController@contacto');
Route::post('sendmail', 'PagesController@sendmail');

