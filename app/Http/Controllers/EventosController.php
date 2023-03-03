<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class EventosController extends Controller
{
    
    public function  index()
    {
        $val = auth()->user()->name;

        return Inertia::render('Eventos',['id'=>$val]);
    }
}
