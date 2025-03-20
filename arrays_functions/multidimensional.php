<?php
$pessoa1 = [];

$pessoa1['nome'] = 'Taylor';
$pessoa1['sobrenome'] = 'Swift';
$pessoa1['idade'] = 33;


$pessoa2['nome'] = 'Lana';
$pessoa2['sobrenome'] = 'Del Rey';
$pessoa2['idade'] = 36;

$lista_pessoas = [$pessoa1,$pessoa2];

echo "<h1> O nome é: " . $lista_pessoas[0]['nome'] . "</h1>";

?>