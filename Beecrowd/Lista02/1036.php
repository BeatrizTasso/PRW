<?php

    $x = explode(" ", fgets(STDIN));
    $a = $x[0];
    $b = $x[1];
    $c = $x[2];
    
    $delta = ($b*$b) -4*$a*$c;
    $raiz = sqrt($delta);
    
    
    if ($a != 0 && $delta >= 0){
        $val1 = (- $b + sqrt($delta))/(2 * $a);
        $val2 = (- $b - sqrt($delta))/(2 * $a);
        $val1 = number_format($val1, 5, ".", "");
        $val2 = number_format($val2, 5, ".", "");
            echo "R1 = $val1\n";
            echo "R2 = $val2\n";
}
    else {
        echo "Impossivel calcular\n";
}

?>
