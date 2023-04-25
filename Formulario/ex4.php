<?php
    $ano = $_GET['Ano'];

    if($ano%4 == 0)
    {
        echo "Esse ano é bissexto";
    }
    else
    {
        echo "Esse ano não é bissexto";
    }
?>