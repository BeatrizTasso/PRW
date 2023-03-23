<?php

    $x = readline();
    $x = explode(' ', $x);

    $a = $x [0]; 
    $b = $x [1];
    $c = $x [2];
    $d = $x [3];
    
    if ($b > $c && $d > $a && ($c + $d) > ($a + $b) && $c > 0 && $d > 0 && $a % 2==0){
        echo ("Valores aceitos\n");
    }
    
    else {
        echo ("Valores nao aceitos\n");
    }

?>
