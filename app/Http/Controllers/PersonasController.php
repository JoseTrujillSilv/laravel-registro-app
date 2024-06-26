<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function addPersonas(){
        $dni = random_int(200,30000);
        $name = request('nameReg');
        $last_name = request('last_nameReg');
        $edad = request('edadReg');
        $cuenta = request('cuentaReg');

        Personas::create([
            "dni" => $dni,
            "name" => $name,
            "last_name" => $last_name,
            "edad" => $edad,
            "num_cuenta" => $cuenta
        ]);

       return view('exito',compact('dni'));

    }
    
}
