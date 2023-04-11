<?php

$vetor = array(100);
$vetor[0] = floatval(fgets(STDIN));

for ($i = 0; $i < 100; $i++) {
    $line = "N[$i] =";
    $metade = $vetor[$i] / 2;
    $vetor[$i + 1] = $metade;
    echo "$line " . number_format($vetor[$i], 4, ".", "") . PHP_EOL;
}
?>