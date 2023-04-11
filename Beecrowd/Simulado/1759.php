<?php

$n = intval(fgets(STDIN));

$ho = "Ho";
for($i=0; $i < $n; $i++){
    if($i == $n-1)
    	echo "$ho!\n";
    else
    	echo "$ho ";
    
}
?>