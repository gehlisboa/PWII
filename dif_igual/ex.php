
 <?php
	$numeros = [5,-5,1,-22,25,-15,15,-30,25,-2];
	$numIgual = 0;
    $numDiferente = 0;

    foreach ($numeros as $key => $value) {
        
        if ($value == 0) {
            $numIgual++;
        } else {
           $numDiferente++;
        }
    };
 
        echo "Existem ${numIgual} iguais a 0 e ${numDiferente} números diferentes de 0.";
?>
?>