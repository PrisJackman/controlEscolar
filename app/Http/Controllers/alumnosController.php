<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;
use App\Alumnos;

class alumnosController extends Controller
{
    public function registra(){
    	$carrera=Carrera::all();
    	return view('registrarAlumno', compact('carrera'));
    }

    public function guardar(Request $datos){
    	$alumno= new Alumnos();
    	$alumno->nombre=$datos->input('nombre');
    	$alumno->numero_control=$datos->input('control');
    	$alumno->edad=$datos->input('edad');
    	$alumno->sexo=$datos->input('sexo');
    	$alumno->carrera_id=$datos->input('carrera');
    	$alumno->save();
    	return redirect('/consultarAlumnos');
    }

    public function consultar(){
    	$alumnos=Alumnos::all();
    	return view ('consultarAlumnos',compact('alumnos'));
    }
}
