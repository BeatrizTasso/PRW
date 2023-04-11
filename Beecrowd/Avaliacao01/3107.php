<?php

    $v = floatval(readline());
    $d = floatval(readline());
    $c = floatval(readline());
    
    $horas = $d / $v;
    $comb = $d / $c;
    
    $horas = number_format($horas, 2, "."," ");
    $comb = number_format($comb, 2, "."," ");
    
    echo ("Total horas: $horas\n");
    echo ("Total combustivel: $comb\n");

?>