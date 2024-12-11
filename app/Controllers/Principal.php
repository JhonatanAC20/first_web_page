<?php

namespace App\Controllers;

class Principal extends BaseController
{
    public function index(): string
    {
        $datos = ['titulo' => 'Inicio'];
        return view('principal/index', $datos);
    }
}
