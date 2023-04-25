<?php 
    $data = $_GET['data'];  
    if (intval(substr($data,0,2)) < 12){
        if (intval(substr($data,2,2)) < 01){
            echo "Bom dia!";
        }
    }
    else if(intval(substr($data,0,2)) < 18){
        if(intval(substr($data,2,2)) < 01){
            echo "Boa Tarde!";
        }
    }
    else {
        echo "Boa Noite!";
    }
?>