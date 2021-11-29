<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    public function derivation($funcion){
    
        $derivada = derivar($funcionArray);
        $resultado = renderizarFuncion($derivada,$Variable);
      return $resultado;
   
    }
    
  
    function derivar($funcion){
        for($i = 0; $i <= count($funcion)-1;$i++){
            if(isset($funcion[$i]['numero'])){
                if($funcion[$i]['numero'] == '-'){
                    $funcion[$i]['numero'] = -1;
                }
            }else{
                $funcion[$i]['numero'] = 1;
            }
            if(!isset($funcion[$i]['variable'])){
                $funcion[$i]['numero']='';
            }
            if( isset($funcion[$i]['potencia']) && $funcion[$i]['potencia']){
                $funcion[$i]['numero'] = intval($funcion[$i]['numero']) * intval($funcion[$i]['potencia']);
                $funcion[$i]['potencia'] = $funcion[$i]['potencia'] - 1;
            }else{
                $funcion[$i]['potencia']=0;
            }
            
            if($funcion[$i]['potencia'] <= 0){
                $funcion[$i]['variable'] = '';
            }
            if($funcion[$i]['potencia'] <= 1){
                $funcion[$i]['potencia']= '';
            }
        }
        
        return $funcion;
    }
    function renderizarFuncion($funcion,$variable){
        $resultado = "ƒ'(".$variable.") = ";
        $primerValor = true;
        for($i=0;$i <= count($funcion)-1; $i++){
            if(gettype($funcion[$i]['numero']) != 'string' && abs($funcion[$i]['numero'])/$funcion[$i]['numero'] != -1){
                if(!$primerValor){
                    $resultado .= '+';
                } 
            }
            $resultado .= $funcion[$i]['numero'].$funcion[$i]['variable'];
            if($funcion[$i]['potencia'] != ''){
                $resultado .= '^'.$funcion[$i]['potencia'];  
            }
            $primerValor = false;
        }
        return $resultado;
    }
    function esNumerico($valor){
        $res = is_numeric($valor);
        return $res;
    } 
    
    function esVariable($valor){
        $res = false;
        
        for($i = 97; $i <= 122; $i++){
            if($valor == chr($i)){
                $res = true;
                break;
            }
        }
        for($i = 65; $i <= 90; $i++){
            if($valor == chr($i)){
                $res = true;
                break;
            }
        }
    
        return $res;
    }
    function esNegativo($valor){
        $res = false;
        if($valor == chr(45)){
            $res = true;
        }
        return $res;
    }
    
    function esPositivo($valor){
        $res = false;
        if($valor == chr(43)){
            $res = true;
        }
        return $res; 
    }
    
    function esPotencia($valor){
        $res = false;
        if(ord($valor) == 194){
            $res = 2;
        }elseif($valor == chr(252)){
            $res = 3;
        }elseif($valor == chr(94)){
            $res = chr(94);
        }
        switch(ord($valor)){
            case 253:
                $res = true;
                break;
            case 252:
                $res = 3;
                break;
            case 94:
                $res = chr(94);
                break; 
        }
        return $res;
    }
    
}
