<?php

    $n = intval(fgets(STDIN));
    
    for ($i = 0; $i < $n; $i++) {
        $input = explode(" ", fgets(STDIN));
        
    $a = rtrim($input[0]);
    $b = rtrim($input[1]);
    
    
    $digfinal = substr($a, -strlen($b));
           
    
    if($digfinal == $b){
        echo "encaixa\n";}
    else {
            echo "nao encaixa\n";}
    }
        
?>