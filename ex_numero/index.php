<?php
	$numeros = [5,-5,1,-22,25,-15,15,-30,25,-2];
	$numMaior = 0;
    $numMenor = 0;

    foreach ($numeros as $key => $value) {
        
        if ($value > 0) {
            $numMaior++;
        } else if ($value < 0) {
           $numMenor++;
        }
    };
 
        echo "Existem ${numMaior} números maiores que 0 e ${numMenor} números menores que 0.";
?>