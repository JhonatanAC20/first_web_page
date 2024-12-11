<?php

namespace App\Controllers;

class Servicios extends BaseController
{
    public function index(): string
    {
        $datos = ['titulo' => 'Servicios'];
        return view('servicios/index', $datos);
    }
}
