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
                ->select('ideventos', 'nombre', 'fecha', 'fechat','lugar','finalizado')
                ->where('anual', '=', 2022)
                ->where('adscripcion', '=', $unidad)
                ->get();
        return Inertia::render('Eventos',['eventos'=>$eventos]);
    }

    public function detalles(Request $request, int $id)
    {
       
        $datos = DB::table('eventos')
                ->select('ideventos', 'nombre', 'fecha', 'fechat','lugar','finalizado','cre','horast','horasp','participantes')
                ->where('ideventos', '=', $id)
                ->get();
        
        $participantes = DB::table('asistencia')
                ->select('asistencia.ideventos','asistencia.folio','asistencia.calificacion','personal.nombre','personal.apellidos','unidades.nombre as ads')
                ->leftJoin('personal', 'asistencia.idpersonal', '=', 'personal.idpersonal')
                ->leftJoin('unidades', 'personal.plantilla', '=', 'unidades.idunidad')
                ->where('tipo_asist', '=', 1)
                ->where('ideventos', '=', $id)
                ->get();

                $ponentes = DB::table('asistencia')
                ->select('asistencia.ideventos','asistencia.folio','asistencia.horast','asistencia.horasp','personal.nombre','personal.apellidos','unidades.nombre as ads')
                ->leftJoin('personal', 'asistencia.idpersonal', '=', 'personal.idpersonal')
                ->leftJoin('unidades', 'personal.plantilla', '=', 'unidades.idunidad')
                ->where('tipo_asist', '=', 2)
                ->where('ideventos', '=', $id)
                ->get();

        
                return Inertia::render('DatosEv',['eventos'=>$datos,'participantes'=>$participantes,'ponentes'=>$ponentes]);
    }

    public function subir(Request $request, int $id)
    {
       
        return Inertia::render('SubirAsis',['id'=>$id]);
 
    }
}
