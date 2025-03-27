<?php
/**
 * Crie um array no qual irá conter 3 pessoas (nome, idade).
 * Faça um forEach para exibir cad uma das pessoas, e exiba se a pessoa pode votar ou não.
 * idade menor que 16 não pode votar
 * idade entre 16 e 18 voto opcional
 * idade entre 18 e 70 obrigatorio
 * idade maior que 70 voto opcional
 */

    $pessoas = [
    [
        'nome' => 'Selena',
        'idade' => 5
    ],
    [
        'nome' => 'Justin',
        'idade' => 17
    ],
    [
        'nome' => 'Taylor',
        'idade' => 69
    ]
];

verificarVotacao($pessoas);

function verificarVotacao($pessoas){
    foreach ($pessoas as $key => $pessoa){
        if($pessoa['idade'] < 16)
            echo $pessoa ['nome'] . ' não pode votar';
    
        else if($pessoa['idade'] >= 16 && $pessoa['idade'] < 18)
            echo $pessoa['nome'] . ' voto opcional';
    
        else if($pessoa['idade'] >= 18 && $pessoa['idade'] < 70)
            echo $pessoa['nome'] . ' voto obrigatório';
    
        else
            echo $pessoa['nome'] . ' voto opcional';
           
        echo '<br>';
        echo '<br>';
    }
}

    

?>