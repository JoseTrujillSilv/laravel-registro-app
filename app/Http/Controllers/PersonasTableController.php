<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasTableController extends Controller
{
    public function getPersonas(){
        $tables = Personas::all();
        $active = false;

        $next = view('table',compact('tables'));
        $back = view('errorLogin');

        foreach ($tables as $table) {
            // Access the DNI property of the current Persona object
            $dni = $table->dni;
            $name = $table->name;
            
            if($dni == request('dniLogin') && $name == request('nameLogin'))
                $active = true;
        }

        if ($active) {
            return $next;
        }else{
            return $back;
        }
    }
}
