<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Densidad;
    

class DensidadController extends Controller
{
    public function densidad($presion,$densidad,$temperatura,$pesoM){

        $conts = 0.08205746;
        $resultado = ($presion*$pesoM)/($conts*$temperatura);
       $date[] = [
        'resultado'=> $resultado ,
       ];

       return $date; 
       unset($date);
 

    }
}
