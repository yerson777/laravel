<?php

namespace App\Http\Controllers;
use App\Models\Evento;
use App\Models\Cliente;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function MostrarEvento(Request $request)
    {
        $evento=Evento::get();
        return view ('evento',['eventos'=>$evento]);
    }
    

    }
