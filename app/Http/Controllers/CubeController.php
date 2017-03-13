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
    
    
    public function getResult(Request $req, $tabla_op, $N, $M) {
        
        if($req->ajax()){
            // Calcula los resultados con los valores de entrada
            $query_result = new Query();
            $m_tabla_op = json_decode($tabla_op);
            
            return response()->json($query_result->calculaResult($m_tabla_op, $N, $M));
        }
    }
    
}
