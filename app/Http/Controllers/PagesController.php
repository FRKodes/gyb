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

    public function retroexcavadora_super_n()
    {
        return View('pages.retroexcavadora_super_n');
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

    public function sendmail()
    {

        Mail::send('emails.contacto-email', [], function($message){
            $message->to('frkalderon@gmail.com', 'GyB Web')->subject('Contacto desde GyB Web');
        });
    }   




}