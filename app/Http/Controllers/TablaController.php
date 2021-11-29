<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Tabla;

class TablaController extends Controller
{

    public function segundoGrado($a,$b,$c){
        //y=x´2+x+c
        $y;
        $x;
        $a;
        $b;
        $c;
        $exp2=2;
        $exp1=1;
       
        for($x=-5;$x<=5;$x++){
            $y= $a*(pow($x,$exp2))+($b*$x) + ($c);
            $date[]  = ([
               
                 'x' => $x,
                 'y' => $y
            ]);
            

        }
        
        return $date; 
        unset($date);
        
    }
    
    public function tercerGrado($a,$b,$c,$d){
        //y=x´3+x´2+x+c
        $y;
        $x;
        $a;
        $b;
        $c;
        $d;
        $exp3=3;
        $exp2=2;
        $exp1=1;

        for($x=-10;$x<=10;$x++){
            $y= $a*(pow($x,$exp3))+ $b*(pow($x,$exp2))+($c*$x) + ($d);
            $date   [$x]  = ([ 
                 'x' => $x,
                 'y' => $y
            ]);

        }
        return response()->json(['data'=> $date],201); 
        unset($date);
    }
}
