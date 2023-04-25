<?php 
    $nome = $_GET['nome'];
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $freq = $_GET['freq'];

    $media= ($nota1 * $nota2)/2;

    if($media < 5){
        echo "<h1 style='color:red;'> Reprova por nota ";
    }
    else if($freq < 75){
        echo "<color='#ff0000'> Reprova por frequencia";
    }
    else {
        echo "Aprovado";
    }
?>