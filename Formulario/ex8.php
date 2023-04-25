<?php
     $multiplicador = $_GET['multiplicador'];

     for($i=1; $i <= 10; $i++){
        $posicao = $multiplicador * $i;
        echo "$multiplicador x $i = $posicao <br>";
     }
?>