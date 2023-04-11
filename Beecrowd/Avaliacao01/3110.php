<?php
  
   $L = floatval(readline());
  
  $M = array();
  
  for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 5; $j++){
      $M[$i][$j] = readline();
    }
    
  }
  for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 5; $j++){
      if($M[$i][$j] >= $L){
        echo("Valor Encontrado: ".$M[$i][$j]." Linha: ".$i." Coluna: ".$j."\n");
      }
    } 
  }
?>