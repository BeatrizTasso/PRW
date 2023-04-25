<?php
    $op = $_GET['op'];
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

     if ($op == "somar")
     {       
        $resultado = $num1 + $num2;
     }
     else if($op == "subtrair")
     {
        $resultado = $num1 - $num2;
     }
     else if($op == "dividir")
     {
        $resultado = $num1 / $num2;
     }
     else if($op == "multiplicar")
     {
        $resultado = $num1 * $num2;
     }

     echo "Resultado : $resultado\n";
?>