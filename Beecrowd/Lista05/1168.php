<?php



$N = (int) fgets(STDIN);

for ($i = 0; $i < $N; $i++) {
    
  
    $num = trim(fgets(STDIN));


    $num = str_split($num);
   $leds = 0;
   

    foreach ($num as $digito) {
        switch ($digito) {
            case 1:
                $leds += 2;
                break;
            case 2:
                $leds += 5;
                break;
            case 3:
                $leds += 5;
                break;
            case 5:
                $leds += 5;
                break;
            case 4:
                $leds += 4;
                break;
            case 6:
                $leds += 6;
                break;
            case 9:
                $leds += 6;
                break;
            case 0:
                $leds += 6;
                break;
            case 7:
                $leds += 3;
                break;
            case 8:
                $leds += 7;
                break;
        }

 
    }

    $ledsTotal = isset($ledsTotal) ? $ledsTotal + $leds : $leds;

    echo $ledsTotal . " leds" . PHP_EOL;
    $ledsTotal = 0;

}
   
?>
