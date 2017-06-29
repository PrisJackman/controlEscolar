<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grupos;
use App\Maestros;
use App\Materias;
use DB;

class gruposController extends Controller
{
    public function registra(){
    	$maestro=Maestros::all();
    	$materia=Materias::all();
    	return view('registrarGrupos', compact('maestro'), compact('materia'));
    }

    public function guardar(Request $datos){
    	$grupo= new Grupos();
    	$grupo->salon=$datos->input('salon');
    	$grupo->horario=$datos->input('horario');
    	$grupo->maestro_id=$datos->input('maestro');
    	$grupo->materia_id=$datos->input('materia');
    	$grupo->save();
    	return redirect('/consultarGrupos');
    }

    public function consultar(){
    	$grupo=DB::table('grupos')
    		->join('maestros','grupos.maestro_id','=','maestros.id')
            ->join('materias','grupos.materia_id','=','materias.id')
    		->select('grupos.*','maestros.nombre AS nom_maestro','materias.nombre AS nom_materia')
    		->paginate(5);
    	return view ('consultarGrupos',compact('grupo'));
    }

    public function eliminar($id){

    	$grupo=Grupos::find($id);
    	$grupo->delete();
    	return redirect('consultarGrupos'); 	
    }

    public function editar($id){
      $grupo=DB::table('grupos')
         ->where('grupos.id', '=', $id)
         ->join('maestros', 'grupos.maestro_id', '=', 'maestros.id')
         ->join('materias', 'grupos.materia_id', '=', 'materias.id')
         ->select('grupos.*', 'maestros.nombre AS nom_maestro','materias.nombre AS nom_materia')
         ->first();
      $maestro=Maestros::all();
      $materia=Materias::all();
      return view('editarGrupo', compact('grupo', 'maestro','materia'));
   }

    public function actualizar($id, Request $datos){
    	$grupo=Grupos::find($id);
    	$grupo->salon=$datos->input('salon');
        $grupo->horario=$datos->input('horario');
        $grupo->maestro_id=$datos->input('maestro');
        $grupo->materia_id=$datos->input('materia');
    	$grupo->save();

    	return redirect('consultarGrupos');
    }
}
