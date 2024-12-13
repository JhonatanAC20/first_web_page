<?php

namespace App\Controllers;

class Contactos extends BaseController
{
    public function index(): string
    {
        $datos = ['titulo' => 'Contactos'];
        return view('contactos/index', $datos);
    }

    public function formulario(): string
    {
        $datos = ['titulo' => 'Contactos'];
        return view('contactos/form', $datos);
    }
}
