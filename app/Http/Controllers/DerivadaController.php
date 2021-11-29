<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Derivada;
    
class DerivadaController extends Controller
{ 
    public function derivadaPriGrado($base2,$base1,$base0){
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
        $fx =  $base2.'x^'. $exp2. $base1 .'x^'.$exp1. ' '. $base0;
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
 public function derivadaTerGrado($base3,$base2, $base1,$base0){
     
        $der3;
        $exp3=3;
        $newExp3;
        $der3=$base3*$exp3;
        $newExp3=$exp3-1;

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
        $fx= $base3. 'x^'.$exp3  .$base2. 'x^'. $exp2. $base1 .'x^'.$exp1. ' '. $base0;
        $fpx=$der3.'x^2'. ' ' . $der2.'x' .''  .$der1;
       $date[] = [
        'fx'=> $fx,
        'fpx' => $fpx
       ];

       Derivada::create([ 
        'fx'=> $fx,
        'fpx' => $fpx
       ]     
       );
       return $date; 
             unset($date);
       

    }
    public function derivadaCuaGrado($base4, $base3,$base2, $base1,$base0){
     
        $der4;
        $exp4=4;
        $newExp4;
        $der4=$base4*$exp4;
        $newExp4=$exp4-1;

        $der3;
        $exp3=3;
        $newExp3;
        $der3=$base3*$exp3;
        $newExp3=$exp3-1;

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
       
        $fx= $base4. 'x^'.$exp4 .$base3. 'x^'.$exp3  .$base2. 'x^'. $exp2. $base1 .'x^'.$exp1. ' '. $base0;
        $fpx=$der4.'x^3'. $der3.'x^2'. ' ' . $der2.'x' .' '  .$der1;
       $date[] = [
        'fx'=> $fx,
        'fpx' => $fpx
       ];

       Derivada::create([ 
        'fx'=> $fx,
        'fpx' => $fpx
       ]     
       );
       return $date; 
             unset($date);
       

    }

}

