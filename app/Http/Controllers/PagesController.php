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
}
