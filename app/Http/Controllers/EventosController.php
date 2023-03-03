<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class EventosController extends Controller
{
    
    public function  index()
    {
        $unidad = auth()->user()->unidad;

        //busco los eventos para generar la tabla

                $eventos = DB::table('eventos')
                ->where('anual', '=', 2022)
                ->where('adscripcion', '=', $unidad)
                ->get();
        return Inertia::render('Eventos',['eventos'=>$eventos]);
    }
}
