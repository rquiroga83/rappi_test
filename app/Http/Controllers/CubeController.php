<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Util\Query;

class CubeController extends Controller
{
    //Funcion principal crea la vista
    public function create(){
        return view('cube');
    }
    
    
    public function getResult(Request $req, $tabla_op) {
        
        if($req->ajax()){
            // Completa la fecha en un string con mes dia hora para adaptarse a la funcion get_series_localidades
            $query_result = new Query();

            return response()->json($query_result);
        }
    }
    
}
