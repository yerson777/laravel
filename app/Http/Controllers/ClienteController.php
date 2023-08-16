<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //
    public function index()
    {
        $eventos = Evento :: all();
        return view('eventostore', compact ('eventos'));
    }

}
