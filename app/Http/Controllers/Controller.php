<?php

namespace App\Http\Controllers;

use App\Models\Ingreso;
use App\Models\Salida;
use App\Models\User;
use App\Models\Usuario;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function nuevo_ingreso(Request $request){

        $user = Usuario::where('campo_identificador', $request->get('user'))->first();

        $ingreso = new Ingreso();
        $ingreso->ultimo_ingreso = $request->get('fecha_hora');
        $ingreso->usuario_id = $user->id;
        $ingreso->temperatura = $request->get('temperatura');

        $ingreso->save();

        return redirect('/dashboard');
    }

    public function nueva_salida(Request $request){
        $user = Usuario::where('campo_identificador', $request->get('user'))->first();

        $salida = new Salida();
        $salida->ultimo_egreso = $request->get('fecha_hora');
        $salida->usuario_id = $user->id;

        $salida->save();

        return redirect('/salidas');
    }

    public function salidas(){
        $salidas = Salida::all();
        return view('salidas', compact('salidas'));
    }
}
