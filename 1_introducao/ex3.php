<?php
// comentario de uma linha

$idade = 60;

if ($idade < 12 ) {
    echo "criança";
}
else if($idade >= 12 && $idade < 18){
    echo "adolescente";
}
else if($idade >= 18 && idade <60){
    echo "adulto";
}
else{
    echo "idoso";
}
  
?>