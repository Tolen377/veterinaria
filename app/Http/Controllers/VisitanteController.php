<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitanteController extends Controller
{
    public function showIndex()
    {
        return view('index');
    }
    public function showAcerca()
    {
        return view('acerca');
    }
    public function showCita()
    {
        return view('cita');
    }
    public function showGaleria()
    {
        return view('galeria');
    }
    public function showHorario()
    {
        return view('horario');
    }
}
