<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volumen;
class VolumenController extends Controller
{
    public function volumen($volumen1,$presion1,$temperatura1,$presion2,$temperatura2){

        $conts = 0.08205746;
        $resultado = ($presion1*$volumen1*$temperatura2)/($presion2*$temperatura1);
        $date[] = [
            'resultado'=> $resultado ,
           ];
    
           return $date; 
           unset($date);
     
    }
}
