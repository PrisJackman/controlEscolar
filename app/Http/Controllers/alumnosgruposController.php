<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grupos;
use App\Alumnos;
use App\alumnos_grupos;
use DB;

class alumnosgruposController extends Controller
{
   public function registra(){
    	$grupo=Grupos::all();
    	$alumno=Alumnos::all();
    	return view('registrarAlumnosGrupos', compact('grupo','alumno'));
    }

    public function guardar(Request $datos){
    	$alumno_grupo= new alumnos_grupos();
    	$alumno_grupo->grupo_id=$datos->input('grupo');
    	$alumno_grupo->alumno_id=$datos->input('alumno');
    	$alumno_grupo->save();
    	return redirect('/consultarAlumnosGrupos');
    }

    public function consultar(){
    	$alumno_grupo=DB::table('alumnos_grupos')
    		->join('grupos','alumnos_grupos.grupo_id','=','grupos.id')
            ->join('alumnos','alumnos_grupos.alumno_id','=','alumnos.id')
    		->select('alumnos_grupos.*','grupos.salon AS salon_gpo','alumnos.nombre AS nom_alumno')
    		->paginate(5);
    	return view ('consultarAlumnosGrupos',compact('alumno_grupo'));
    }

    public function eliminar($id){

    	$alumno_grupo=alumnos_grupos::find($id);
    	$alumno_grupo->delete();
    	return redirect('consultarAlumnosGrupos'); 	
    }

    public function editar($id){
      $alumno_grupo=DB::table('alumnos_grupos')
         ->where('alumnos_grupos.id', '=', $id)
         ->join('grupos', 'alumnos_grupos.grupo_id', '=', 'grupos.id')
         ->join('alumnos', 'alumnos_grupos.alumno_id', '=', 'alumnos.id')
         ->select('alumnos_grupos.*', 'grupos.salon AS salon_gpo','alumnos.nombre AS nom_alumno')
         ->first();
      $grupo=Grupos::all();
      $alumno=Alumnos::all();
      return view('editarAlumnoGrupo', compact('alumno_grupo', 'grupo','alumno'));
   }

    public function actualizar($id, Request $datos){
    	$alumno_grupo=alumnos_grupos::find($id);
        $alumno_grupo->grupo_id=$datos->input('grupo');
        $alumno_grupo->alumno_id=$datos->input('alumno');
    	$alumno_grupo->save();	 

    	return redirect('consultarAlumnosGrupos');
    }

}
