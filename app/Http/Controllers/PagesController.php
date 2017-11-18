<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}