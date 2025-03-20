<?php

$estacionamento = [
    'Ferrari',
    'Porshe',
    'Audi'
];

foreach ($estacionamento as $key => $value) {
    echo "<hr>";
    echo "<b>Veículo " . $key . ": </b>"  . $value;
}

$patio = [
    [
        'nome' => 'Ferrari',
        'placa' => '123FR',
        'foto' => 'https://cdn.autopapo.com.br/box/uploads/2024/10/17164948/ferrari_f80_vermelha-frente-parada-com-portas-abertas-732x488.jpeg'
    ],
    [
        'nome' => 'Porshe',
        'placa' => '456PS',
        'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQID5rAtnBAJSQmd-DXhjsjS6HbmdqfLjmTlQ&s'
    ],
    [
        'nome' => 'Audi',
        'placa' => '789AD',
        'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1jxms3EhHgmSdWN_1k8Cw8t9TaBtCnr71xg&s'
    ]
];

foreach ($patio as $key => $value) {
    echo "<br>Veiculo: " . $value["nome"];
    echo "<br>Placa: " . $value["placa"];
    echo "<br><img src='" . $value["foto"] ."' style='width: 300px;'>";
    echo "<hr>";
}

?>