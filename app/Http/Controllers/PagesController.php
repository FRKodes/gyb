<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input as Input;

class PagesController extends Controller
{
    public function index()
    {
    	return View('pages.index');
    }

    public function venta_renta()
    {
        return View('pages.venta-renta');
    }

    public function refacciones()
    {
    	return View('pages.refacciones');
    }

    public function empresa()
    {
    	return View('pages.empresa');
    }

    public function contacto()
    {
    	return View('pages.contacto');
    }

    public function piston_falange_320()
    {
        return View('pages.piston-falange-320');
    }
    public function refac_01()
    {
        return View('pages.refac-01');
    }

    public function gator_primario_24x36()
    {
        return View('pages.gator_primario_24x36');
        
    }

    public function mantle_bowl_liner_hp200()
    {
        return View('pages.mantle_bowl_liner_hp200');

    }
    
    public function mantle_bowl_liner_hp300()
    {
        return View('pages.mantle_bowl_liner_hp300');

    }

    public function metso_primario_c106()
    {
        return View('pages.metso_primario_c106');
    }

    public function sandvik_primario_1208()
    {
        return View('pages.sandvik_primario_1208');
    }

    public function gator_impacto_1013()
    {
        return View('pages.gator_impacto_1013');
    }

    public function gator_impacto_1315()
    {
        return View('pages.gator_impacto_1315');
    }

    public function metso_impacto_lt1213()
    {
        return View('pages.metso_impacto_lt1213');
    }

    public function metso_primario_lt120()
    {
        return View('pages.metso_primario_lt120');
    }

    public function gator_rodillos_varias_medidas()
    {
        return View('pages.gator_rodillos_varias_medidas');
    }

    public function excavadora_210_LC()
    {
        return View('pages.excavadora_210_LC');
    }

    public function excavadora_320_c()
    {
        return View('pages.excavadora_320_c');
    }
    
    public function excavadora_320_CL()
    {
        return View('pages.excavadora_320_CL');
    }
    
    public function excavadora_350_lc()
    {
        return View('pages.excavadora_350_lc');
    }
    
    public function motoconformadora_140_h()
    {
        return View('pages.motoconformadora_140_h');
    }

    public function motoconformadora_845_b()
    {
        return View('pages.motoconformadora_845_b');
    }

    public function retroexcavadora_416_e()
    {
        return View('pages.retroexcavadora_416_e');
    }

    public function retroexcavadora_580_m()
    {
        return View('pages.retroexcavadora_580_m');
    }

    public function retroexcavadora_super_m()
    {
        return View('pages.retroexcavadora_super_m');
    }

    public function camion_articulado_cat_740()
    {
        return View('pages.camion_articulado_cat_740');
    }

    public function camion_pipa_continental_20k_litros()
    {
        return View('pages.camion_pipa_continental_20k_litros');
    }

    public function camion_volteo_14mts()
    {
        return View('pages.camion_volteo_14mts');
    }

    public function cargador_frontal_case_721C()
    {
        return View('pages.cargador_frontal_case_721C');
    }

    public function cargador_frontal_case_721e()
    {
        return View('pages.cargador_frontal_case_721e');
    }

    public function cargador_frontal_cat_966()
    {
        return View('pages.cargador_frontal_cat_966');
    }

    public function cono_secundario_metso_sobre_orugas()
    {
        return View('pages.cono_secundario_metso_sobre_orugas');
    }

    public function cono_secundario_semifijo_414()
    {
        return View('pages.cono_secundario_semifijo_414');
    }

    public function excavadora_hyundai()
    {
        return View('pages.excavadora_hyundai');
    }

    public function excavadora_cat_320c()
    {
        return View('pages.excavadora_cat_320c');
    }

    public function excavadora_doosan_225lx()
    {
        return View('pages.excavadora_doosan_225lx');
    }

    public function excavadora_dossan_340()
    {
        return View('pages.excavadora_dossan_340');
    }

    public function excavadora_komatsu_pc210()
    {
        return View('pages.excavadora_komatsu_pc210');
    }

    public function excavadora_komatsu_pc350()
    {
        return View('pages.excavadora_komatsu_pc350');
    }

    public function generador_cummins_125_kva()
    {
        return View('pages.generador_cummins_125_kva');
    }

    public function generador_himmoinsa_245_kva()
    {
        return View('pages.generador_himmoinsa_245_kva');
    }

    public function motoconformadora_case_845()
    {
        return View('pages.motoconformadora_case_845');
    }

    public function motoconformadora_cat_140H()
    {
        return View('pages.motoconformadora_cat_140H');
    }

    public function motoconformadora_champion_730a()
    {
        return View('pages.motoconformadora_champion_730a');
    }

    public function planta_luz_yanmar()
    {
        return View('pages.planta_luz_yanmar');
    }

    public function retroexcavadora_case_580m()
    {
        return View('pages.retroexcavadora_case_580m');
    }

    public function retroexcavadora_cat_416e()
    {
        return View('pages.retroexcavadora_cat_416e');
    }

    public function tractor_sobre_orugas_cat_dr8()
    {
        return View('pages.tractor_sobre_orugas_cat_dr8');
    }

    public function tractor_sobre_orugas_komatsu_d155ax()
    {
        return View('pages.tractor_sobre_orugas_komatsu_d155ax');
    }

    public function triturador_primario_gator_30x42()
    {
        return View('pages.triturador_primario_gator_30x42');
    }

    public function trituradora_impacto_secundaria_gator()
    {
        return View('pages.trituradora_impacto_secundaria_gator');
    }

    public function trituradora_secundaria_quijada_sfk()
    {
        return View('pages.trituradora_secundaria_quijada_sfk');
    }

    public function vibrocompactador_ingersold_rand()
    {
        return View('pages.vibrocompactador_ingersold_rand');
    }

    public function maquinaria_cargador_frontal_cat_950g()
    {
        return View('pages.maquinaria_cargador_frontal_cat_950g');
    }

    public function maquinaria_tractor_cat_d7h()
    {
        return View('pages.maquinaria_tractor_cat_d7h');
    }

    public function maquinaria_trituradora_metso_lt120()
    {
        return View('pages.maquinaria_trituradora_metso_lt120');
    }

    public function trituradora_impacto_1214_hongXing()
    {
        return View('pages.trituradora_impacto_1214_hongXing');
    }

    public function trituradora_primaria_24x36_gator()
    {
        return View('pages.trituradora_primaria_24x36_gator');
    }

    public function trituradora_secundaria_cono_3_1_4_sec()
    {
        return View('pages.trituradora_secundaria_cono_3_1_4_sec');
    }

    public function sendmail()
    {

        Mail::send('emails.contacto-email', [], function($message){
            $message->to('frkalderon@gmail.com', 'GyB Web')->subject('Contacto desde GyB Web');
        });
    }   




}