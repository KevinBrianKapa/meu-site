<?php

$massaInicial = 1.0;
$massaAlvo = 0.10; 

$tempo = 0;

while ($massaInicial > $massaAlvo) {
    $massaInicial *= 0.75;

    $tempo += 30; 

}

echo "A massa será menor que 0,10 em $tempo segundos.";

?>