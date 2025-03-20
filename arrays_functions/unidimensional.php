<?php

// vetor = array unidimensional
$lista_frutas = [];

// array sequencial utiliza números
$lista_frutas[0] = 'Banana';
$lista_frutas[1] = 'Maçã';
$lista_frutas[2] = 'Morango';
$lista_frutas[3] = 'Uva';

echo '<pre>';
echo  var_dump($lista_frutas);


$lista_objetos = [];
// array associativo utiliza texto
$lista_objetos['objeto1'] = 'Bola';
$lista_objetos['objeto2'] = 'Boneca';

echo '<pre>';
echo  var_dump($lista_objetos);

?>