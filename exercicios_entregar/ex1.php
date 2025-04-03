<?php
  $alunos = [
    'aluno1' => [
        'nome' => 'Victoria',
        'RM' => '20250123',
        'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_RoNGcvcBpdkSE3D_S-2P0HcxiJoOiuscmA&s',
        'telefone' => '(15)999-999'

    ],
    'aluno2' => [
        'nome' => 'Julia',
        'RM' => '202501456',
        'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0jSS1NucSgndSjUVSQ5xnPXD0xSJQavC8XiY0Es2-AlYZtZLOFMUrQYh7MKmwaCYUliI&usqp=CAU',
        'telefone' => '(15)888-888'
    ],
    'aluno3' => [
        'nome' => 'Ketylin',
        'RM' => '202501345',
        'foto' => 'https://i.pinimg.com/236x/ef/01/89/ef01895c7467f78114bb6c7801feb6c1.jpg',
        'telefone' => '(15)777-777'
    ],
    'aluno4' => [
        'nome' => 'Geovanna',
        'RM' => '202501987',
        'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-rkOD8CMPBtwE6YBMvMCRFOARzBxUbdp8go7G1xHvDPVm6M2JVet5OBLHoAaOQQK8DFE&usqp=CAU',
        'telefone' => '(15)555-555'
    ],
];

foreach ($alunos as $key => $aluno) {
    echo 'Nome do aluno: ' . $aluno['nome'] . '<br>';
    echo 'RM: ' . $aluno['RM'] . '<br>';
    echo 'telefone: ' . $aluno['telefone'];
    echo "<br><img src='" . $aluno["foto"] ."' style='width: 300px;'>" . '<br>';
    echo '<hr>';
}
?>