<?php

namespace App\Http\Controllers;


use App\Models\Ecuacion;

class EcuacionController extends Controller
{

    public function suma($a)
    {
        echo $a;
    }

    public function ecuacion($a, $b, $c )
    {
        $acum = [];


        if ($a == 0) {
            // echo ("el coeficiente no debe ser igual a 0");
            return $acum = [ ['x1' => " ",
            'x2' => " "]];
        } else {
            $d = (pow($b, 2)) - 4 * ($a * $c);
            if ($d >= 0) {
                if ($d == 0) {
                    $x1 = (-$b) / (2 * $a);
                    // echo ("raiz unica = "  );
                    // echo $x;
                    $acum = [ ['x1' => "$x1",
                        'x2' => "$x1"]];
                } else {
                    $x1 = ((-$b) + sqrt($d)) / (2 * $a);
                    $x2 = ((-$b) - sqrt($d)) / (2 * $a);

                    // echo("raiz x1 =  ");
                    // echo $x1;
                    // echo("raiz x2 =  ");
                    // echo $x2;
                    $acum = [ ['x1' => "$x1",
                        'x2' => "$x2"]];

                }
            } else {
                $d = abs($d);
                $x1 = (-$b) / (2 * $a);
                $x2 = sqrt($d) / (2 * $a);
                $x1 = $x1 .'+'.number_format($x2, 2, '.', '').'i';
                $x2 = $x1 .'-'.number_format($x2, 2, '.', '').'i';

                // echo ("raiz compleja 1 = $parteReal  +  $parteIma i"  );
                // echo ("raiz compleja 2 = $parteReal  -  $parteIma i"  );
                $acum = [ ['x1' => "$x1",
                        'x2' => "$x2"]];

            }

        }

        Ecuacion::create(
            [
        'Operacion' => 'x*x'.''.$a.' '.'x'.$b.''.''.$c ,
        'x1' => $x1,
        'x2' => $x2
        ]     
        );

        return $acum;
        unset($date);
    }

}