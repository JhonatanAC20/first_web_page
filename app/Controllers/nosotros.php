<?php

namespace App\Controllers;

class Nosotros extends BaseController
{
    public function index(): string
    {
        $datos = ['titulo' => 'Nosotros'];
        return view('nosotros/index', $datos);
    }
}
