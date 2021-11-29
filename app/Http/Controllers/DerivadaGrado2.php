<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Derivada;
class DerivadaGrado2 extends Controller
{
    public function derivadaSegGrado($base2,$base1,$base0){
     
        $der2;
        $exp2=2;
        $newExp2;
        $der2=$base2*$exp2;
        $newExp2=$exp2-1;

 

        $der1;
        $exp1=1;
        $newExp1;
        $der1=$base1*$exp1;
        $newExp1=$exp1-1;

        
        

        $der0;
        $newExp0 =0 ;
        $der0= $base0*$newExp0;
        $fx =  $base2. 'x^'. $exp2. $base1 .'x^'.$exp1. ' '. $base0;
        $fpx = $der2.'x'.'+'. $der1;
      
     
       $date[] = [
        'fx'=> $fx ,
        'fpx' =>  $fpx
 
       ];

       Derivada::create([ 
        'fx'=> $fx ,
        'fpx' =>  $fpx
       ]     
       );
       return $date; 
             unset($date);
       

    }
}
