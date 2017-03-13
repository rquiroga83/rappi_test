<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Utileria encargada de hacer los calculos y las consultas en la matriz
 *
 * @author andres
 */

namespace App\Util;

use App\Cube;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Query {
    
    public function calculaResult($tabla_op, $N, $M) {
        $response  = array();
        
        //Log::info('');
        
        Cube::truncate();
        
        // Inicializa vector
        for($x = 0 ;$x < $N; $x++){
            for($y = 0 ;$y < $N; $y++){
                for($z = 0 ;$z < $N; $z++){
                    $cube = new Cube;
                    $cube->x = $x;
                    $cube->y = $y;
                    $cube->z = $z;
                    $cube->W = 0;
                    $cube->save();
                }
            }
        }
        
        //realiza updates y query
        foreach($tabla_op as $item){
            if($item->operacion == "UPDATE") {
                $input = explode(" ", $item->valor);
                
                DB::table('cube')
                    ->where( 'x', $input[0]-1)
                    ->where( 'y', $input[1]-1)
                    ->where( 'z', $input[2]-1)
                    ->update(['W' => $input[3]]);
            }
            else if($item->operacion == "QUERY") {
                $input = explode(" ", $item->valor);
                
                
                $results = DB::table('cube')
                            ->whereBetween('x', [$input[0]-1, $input[3]-1])
                            ->whereBetween('y', [$input[1]-1, $input[4]-1])
                            ->whereBetween('z', [$input[2]-1, $input[5]-1])
                            ->get();
                
                $sum =0;
                foreach($results as $result){
                    $sum = $sum + $result->W;
                }
             
                array_push($response,$sum);
            }
        }
        
        
        
        return $response;
    }
}
