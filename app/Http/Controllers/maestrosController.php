<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maestros;

use DB;

class maestrosController extends Controller
{
    public function registra(){
    	return view('registrarMaestros');
    }

    public function guardar(Request $datos){
    	$maestro= new Maestros();
    	$maestro->nombre=$datos->input('nombre');
    	$maestro->no_empleado=$datos->input('control');
    	$maestro->edad=$datos->input('edad');
    	$maestro->sexo=$datos->input('sexo');
    	$maestro->save();
    	return redirect('/consultarMaestros');
    }

    public function consultar(){
    	$maestros=DB::table('maestros')
    		->select('maestros.*')
            ->get();
    		//->paginate(5);
    	return view ('consultarMaestros',compact('maestros'));
    }

    public function eliminar($id){
    	$maestro=Maestros::find($id);
    	$maestro->delete();
    	return redirect('consultarMaestros'); 	
    }

    public function editar($id){
      $maestro=DB::table('maestros')
         ->where('maestros.id', '=', $id)
         ->select('maestros.*')
         ->first();

      return view('editarMaestro',compact('maestro'));
   }

    public function actualizar($id, Request $datos){
    	$maestro=Maestros::find($id);
    	$maestro->nombre=$datos->input('nombre');
    	$maestro->no_empleado=$datos->input('control');
    	$maestro->edad=$datos->input('edad');
    	$maestro->sexo=$datos->input('sexo');
    	$maestro->save();
    	return redirect('consultarMaestros');
    }
}
