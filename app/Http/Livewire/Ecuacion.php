<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Ecuacion extends Component
{
    public function render()
    {
        return view('livewire.ecuacion');
    }

    public function ecuacion($a, $b, $c){
        $menosB = $b *-1;
        $oper1=pow($b,2);
        $oper2 =4*$a*$c;
        $resta =pow($resta,(1/2));
        $dosA=2*$a;
        $result1= ($menosB +$raiz)/($dosA);
        $result2 =($menosb - $raiz) /$dosA;
        echo"raiz x1 =$result1 <br>";
        echo"raiz x2 =$result2 <br>";
            return $result1;
    }
   
    
}
