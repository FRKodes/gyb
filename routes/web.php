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
Route::get('trituradoras-de-piedra-en-venta', 'PagesController@trituradoras');
Route::get('equipo-de-trituracion-de-piedra', 'PagesController@trituradoras');
Route::get('venta-y-renta-de-maquinaria', 'PagesController@venta_renta');
Route::get('venta-de-maquinaria-pesada', 'PagesController@venta_maquinaria');
Route::get('venta-de-refacciones', 'PagesController@refacciones');
Route::get('piston-falange-320-sr', 'PagesController@piston_falange_320');
Route::get('refac-01', 'PagesController@refac_01');
Route::get('refaccion/gator-primario-24x36', 'PagesController@gator_primario_24x36');
Route::get('refaccion/mantle-bowl-liner-hp200', 'PagesController@mantle_bowl_liner_hp200');
Route::get('refaccion/mantle-bowl-liner-hp300', 'PagesController@mantle_bowl_liner_hp300');

Route::get('refaccion/metso-primario-c106', 'PagesController@metso_primario_c106');
Route::get('refaccion/mobile-fix-jaw-plate-muela-fija-movil-primario-c106', 'PagesController@metso_primario_c106');

Route::get('refaccion/sandvik-primario-1208', 'PagesController@sandvik_primario_1208');
Route::get('refaccion/gator-impacto-1013', 'PagesController@gator_impacto_1013');
Route::get('refaccion/gator-impacto-1315', 'PagesController@gator_impacto_1315');

Route::get('refaccion/metso-impacto-lt1213', 'PagesController@metso_impacto_lt1213');
Route::get('refaccion/martillo-liston-blow-bar-impacto-lt1213', 'PagesController@metso_impacto_lt1213');

Route::get('refaccion/metso-primario-lt120', 'PagesController@metso_primario_lt120');
Route::get('refaccion/mobile-fix-jaw-plate-muela-fija-y-muela-movil-primario-lt120', 'PagesController@metso_primario_lt120');

Route::get('refaccion/gator-rodillos-varias-medidas', 'PagesController@gator_rodillos_varias_medidas');
Route::get('refaccion/grapa-banda-transportadora', 'PagesController@grapa_banda_transportadora');
Route::get('refaccion/muela-10x47', 'PagesController@muela_10x47');
Route::get('refaccion/anvils-gator-13x15', 'PagesController@anvils_gator_13x15');
Route::get('refaccion/anvils-hong-xing-1214', 'PagesController@anvils_hong_xing_1214');
Route::get('refaccion/reductor-25-a-1', 'PagesController@reductor_25_a_1');
Route::get('maquinaria/excavadora-210-LC', 'PagesController@excavadora_210_LC');
Route::get('maquinaria/excavadora-320-c', 'PagesController@excavadora_320_c');
Route::get('maquinaria/excavadora-320c', 'PagesController@excavadora_320c');
Route::get('maquinaria/excavadora-350-lc', 'PagesController@excavadora_350_lc');
Route::get('maquinaria/motoconformadora-140-h', 'PagesController@motoconformadora_140_h');
Route::get('maquinaria/motoconformadora-845-b', 'PagesController@motoconformadora_845_b');
Route::get('maquinaria/retroexcavadora-416-e', 'PagesController@retroexcavadora_416_e');
Route::get('maquinaria/retroexcavadora-580-m', 'PagesController@retroexcavadora_580_m');
Route::get('maquinaria/retroexcavadora-super-m', 'PagesController@retroexcavadora_super_m');
Route::get('maquinaria/camion-articulado-cat-740', 'PagesController@camion_articulado_cat_740');
Route::get('maquinaria/camion-pipa-continental-20k-litros', 'PagesController@camion_pipa_continental_20k_litros');
Route::get('maquinaria/camion-volteo-14mts', 'PagesController@camion_volteo_14mts');
Route::get('maquinaria/cargador-frontal-case-721C', 'PagesController@cargador_frontal_case_721C');
Route::get('maquinaria/cargador-frontal-case-721e', 'PagesController@cargador_frontal_case_721e');
Route::get('maquinaria/cargador-frontal-cat-966', 'PagesController@cargador_frontal_cat_966');

Route::get('maquinaria/cono-secundario-metso-sobre-orugas', 'PagesController@cono_secundario_metso_sobre_orugas');
Route::get('maquinaria/cono-secundario-sobre-orugas-hp-300', 'PagesController@cono_secundario_metso_sobre_orugas');

Route::get('maquinaria/cono-secundario-semifijo-414', 'PagesController@cono_secundario_semifijo_414');
Route::get('maquinaria/excavadora-hyundai', 'PagesController@excavadora_hyundai');
Route::get('maquinaria/excavadora-cat-320c', 'PagesController@excavadora_cat_320c');
Route::get('maquinaria/excavadora-doosan-225lx', 'PagesController@excavadora_doosan_225lx');
Route::get('maquinaria/excavadora-dossan-340', 'PagesController@excavadora_dossan_340');
Route::get('maquinaria/excavadora-komatsu-pc210', 'PagesController@excavadora_komatsu_pc210');
Route::get('maquinaria/excavadora-komatsu-pc350', 'PagesController@excavadora_komatsu_pc350');
Route::get('maquinaria/generador-cummins-125-kva', 'PagesController@generador_cummins_125_kva');
Route::get('maquinaria/generador-himoinsa-245-kva', 'PagesController@generador_himmoinsa_245_kva');
Route::get('maquinaria/motoconformadora-case-845', 'PagesController@motoconformadora_case_845');
Route::get('maquinaria/motoconformadora-cat-140H', 'PagesController@motoconformadora_cat_140H');
Route::get('maquinaria/motoconformadora-champion-730a', 'PagesController@motoconformadora_champion_730a');
Route::get('maquinaria/planta-luz-yanmar', 'PagesController@planta_luz_yanmar');
Route::get('maquinaria/retroexcavadora-case-580m', 'PagesController@retroexcavadora_case_580m');
Route::get('maquinaria/retroexcavadora-cat-416e', 'PagesController@retroexcavadora_cat_416e');
Route::get('maquinaria/tractor-sobre-orugas-cat-dr8', 'PagesController@tractor_sobre_orugas_cat_dr8');
Route::get('maquinaria/tractor-sobre-orugas-komatsu-d155ax', 'PagesController@tractor_sobre_orugas_komatsu_d155ax');
Route::get('maquinaria/triturador-primario-gator-30x42', 'PagesController@triturador_primario_gator_30x42');
Route::get('maquinaria/trituradora-impacto-secundaria-gator', 'PagesController@trituradora_impacto_secundaria_gator');
Route::get('maquinaria/trituradora-secundaria-quijada-sfk', 'PagesController@trituradora_secundaria_quijada_sfk');
Route::get('maquinaria/vibrocompactador-ingersol-rand', 'PagesController@vibrocompactador_ingersold_rand');
Route::get('maquinaria/maquinaria-cargador-frontal-cat-950g', 'PagesController@maquinaria_cargador_frontal_cat_950g');
Route::get('maquinaria/maquinaria-tractor-cat-d7h', 'PagesController@maquinaria_tractor_cat_d7h');

Route::get('maquinaria/maquinaria-trituradora-metso-lt120', 'PagesController@maquinaria_trituradora_metso_lt120');
Route::get('maquinaria/trituradora-primaria-sobre-orugas-lt120', 'PagesController@maquinaria_trituradora_metso_lt120');

Route::get('maquinaria/trituradora-impacto-1214-hongXing', 'PagesController@trituradora_impacto_1214_hongXing');
Route::get('maquinaria/trituradora-primaria-24x36-gator', 'PagesController@trituradora_primaria_24x36_gator');
Route::get('maquinaria/trituradora-secundaria-cono-3-1-4-sec', 'PagesController@trituradora_secundaria_cono_3_1_4_sec');
Route::get('venta-maquinaria-trituracion/primario-de-hidraulico-de-quijadas', 'PagesController@primario_de_hidraulico_de_quijadas');
Route::get('venta-maquinaria-trituracion/trituradora-de-impacto-con-sistema-hidraulico', 'PagesController@trituradora_de_impacto_con_sistema_hidraulico');
Route::get('venta-maquinaria-trituracion/cono-de-cilindro-simple', 'PagesController@cono_de_cilindro_simple');
Route::get('venta-maquinaria-trituracion/vsi-de-impacto-vertical', 'PagesController@vsi_de_impacto_vertical');
Route::get('venta-maquinaria-trituracion/criba-vibratoria', 'PagesController@criba_vibratoria');
Route::get('venta-maquinaria-trituracion/alimentador-vibratorio', 'PagesController@alimentador_vibratorio');
Route::get('venta-maquinaria-trituracion/trituradora-de-cono-compuesto', 'PagesController@trituradora_de_cono_compuesto');
Route::get('empresa', 'PagesController@empresa');
Route::get('contacto', 'PagesController@contacto');
Route::post('sendmail', 'PagesController@sendmail');
Route::post('sendmail-refacciones', 'PagesController@sendmail_refacciones');
Route::post('sendmail-maquinaria', 'PagesController@sendmail_maquinaria');
Route::post('sendmail-venta-maquinaria', 'PagesController@sendmail_venta_maquinaria');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode_ = Artisan::call('config:clear');
    return 'ok';
});

