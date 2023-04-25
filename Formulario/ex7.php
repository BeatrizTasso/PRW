<?php
    $idade = $_GET['Idade'];
    $nome = $_GET['Nome'];
    $dias = $idade * 365;
    
    echo "Eu sou $nome e tenho $dias dias na terra!";

?>