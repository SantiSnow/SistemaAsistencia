<?php

namespace App\Http\Controllers;

use App\Models\Ingreso;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function nuevo_ingreso(Request $request){
        $ingreso = new Ingreso();
        $ingreso->ultimo_ingreso = $request->get('fecha_hora');
        $ingreso->user_id = $request->get('user');
        $ingreso->temperatura = $request->get('temperatura');

        $ingreso->save();

        return redirect('/dashboard');
    }
}
