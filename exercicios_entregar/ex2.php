<?php
  $zoologico = [
    'animal1' => [
        'nome' => 'Mike',
        'raça' => 'pitbull',
        'especie' => 'canina',
        'cor' => 'cinza',
        'peso' => '15kg',
        'idade' => '9 anos',
        'foto' => 'https://blog-static.petlove.com.br/wp-content/uploads/2019/11/GettyImages-171322173.jpg',

    ],
    'animal2' => [
        'nome' => 'Thor',
        'raça' => 'Pastor Alemão',
        'especie' => 'canina',
        'cor' => 'bege/marrom',
        'peso' => '30kg',
        'idade' => '3 anos',
        'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgrOegdCULbDtAtW6T8-kd2GiOHWSZpo-bIA&s',
    ],
    'animal3' => [
        'nome' => 'Miucha',
        'raça' => 'indefinida',
        'especie' => 'felina',
        'cor' => 'cinza',
        'peso' => '7kg',
        'idade' => '8 anos',
        'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlNc9On3X8Y90u0hzkC4Usu9hEok4GPBM6AA&s',
    ],
    'animal4' => [
        'nome' => 'Lola',
        'raça' => 'Border collie',
        'especie' => 'canina',
        'cor' => 'preta',
        'peso' => '13kg',
        'idade' => '14 anos',
        'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTttYOcsVmPqgxYZRQmuoaDvr0zLx6ZRwsKbQ&s',
    ]
];

foreach ($zoologico as $key => $animal) {
    echo 'Nome do animal: ' . $animal['nome'] . '<br>';
    echo 'Raça: ' . $animal['raça'] . '<br>';
    echo 'Espécie: ' . $animal['especie'] . '<br>';
    echo 'Cor: ' . $animal['cor'] .  '<br>';
    echo 'Peso: ' . $animal['peso'] .  '<br>';
    echo 'Idade: ' . $animal['idade'] .  '<br>';
    echo "<br><img src='" . $animal["foto"] ."' style='width: 300px;'>" . '<br>';
    echo '<hr>';
}