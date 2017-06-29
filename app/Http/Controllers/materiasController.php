<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materias;
use App\Alumnos;
use App\alumnos_grupos;
use App\Grupos;
use DB;
class materiasController extends Controller
{
     public function registra(){
    	return view('registrarMaterias');
    }

    public function guardar(Request $datos){
    	$materia= new Materias();
    	$materia->nombre=$datos->input('nombre');
    	$materia->clave=$datos->input('clave');
    	$materia->creditos=$datos->input('creditos');
    	$materia->save();
    	return redirect('/consultarMaterias');
    }

    public function consultar(){
    	$materias=DB::table('materias')
    		->select('materias.*')
            ->get();
    		//->paginate(5);
    	return view ('consultarMaterias',compact('materias'));
    }

    public function eliminar($id){

    	$materia=Materias::find($id);
    	$materia->delete();
    	return redirect('consultarMaterias'); 	
    }

    public function editar($id){
      $materia=DB::table('materias')
         ->where('materias.id', '=', $id)
         ->select('materias.*')
         ->first();
      return view('editarMateria', compact('materia'));
   }

    public function actualizar($id, Request $datos){
    	$materia=Materias::find($id);
    	$materia->nombre=$datos->input('nombre');
    	$materia->clave=$datos->input('clave');
    	$materia->creditos=$datos->input('creditos');
    	$materia->save();

    	return redirect('consultarMaterias');
    }

    public function cargar($id){
        $alumno=Alumnos::find($id);

        $gruposid=DB::table('alumnos_grupos')
        ->join('grupos','grupos.id','=','alumnos_grupos.grupo_id')
        ->where('alumnos_grupos.alumno_id','=', $id)
        ->pluck('grupos.id');
        
         $lista=DB::table('grupos')
        ->whereNotInt('grupos.id',$gruposid)
        ->join('materias','materias.id','=','grupos.materia_id')
        ->join('maestros','maestros.id','=','grupos.maestro_id')
        ->select('grupos.id','materias.nombre','grupos.horario','grupos.salon')
        ->get();

        $materias=DB::table('grupos')
        ->whereIn('grupos.id',$gruposid)
        ->join('materias','materias.id','=','grupos.materia_id')
        ->join('maestros','maestros.id','=','grupos.maestro_id')
        ->select('grupos.id','materias.nombre','grupos.horario','grupos.salon','materias.clave as mc')
        ->get();

        return view ('cargarMaterias', compact('lista','materias','alumno'));  
    }
    public function cargarGrupo($id,Request $datos){
        $alumnos_grupos=new alumnos_grupos();
        $alumnos_grupos->alumno_id=$id;
        $alumnos_grupos->grupo_id=$datos->input('grupo_id');
        $alumnos_grupos->save();
         return redirect('/cargarMaterias/'.$id);
    }
    public function bajarGrupo($id, $idg){
        DB::table('alumnos_grupos')
        ->where('alumnos_grupos.grupo_id','=',$idg)
        ->where('alumnos_grupos.alumno_id','=',$id)
        ->delete();
        return redirect('/cargarMaterias/'.$id);
    }
}
