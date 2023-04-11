<?php

  while(true){//false
    $N = fgets(STDIN);
    
    if($N == 0) 
    break;//stop
    
    $X = fgets(STDIN);
    $X = explode(" ", $X);
    $td = intval($X[0]);
    $yd = intval($X[1]);
      
    for($i = 0; $i < $N; $i++){
      
      $Y = fgets(STDIN);
      $Y = explode(" ", $Y);
      $tr = intval($Y[0]);
      $yr = intval($Y[1]);
      
      if($td == $tr || $yd == $yr) 
      echo("divisa\n");
      
      else if($tr > $td){
        
        if($yr > $yd) 
        echo("NE\n");
        
        else 
        echo("SE\n");
      }
      else{
        
        if($yr > $yd) 
        echo("NO\n");
        
        else 
        echo("SO\n");
      }
    }
  }
?>