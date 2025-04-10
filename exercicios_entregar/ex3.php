<?php

$etec = [
    'cursos' => [
        'Desenvolvimento de Sistemas' => [
            'Programação Mobile' => [
                'Módulo I',
                'Módulo II',
            ],
            'Programação Web' => [
                'Módulo I',
                'Módulo II',
                'Módulo III',
                'Módulo IV',
            ],
            'Técnicas Avançadas de Programação de Algoritmos' => [],
            'Inglês' => [
                'Módulo I',
                'Módulo II',
                'Módulo III',
            ],
        ],
        'Administração' => [
            'Recursos Humanos' => [
                'Módulo I',
                'Módulo II',
            ],
            'Gestão de Pessoas' => [],
            'Teoria da Administração' => [],
            'Inglês' => [
                'Módulo I',
            ],
        ]
    ]
];

echo "- Etec<br>";

foreach ($etec['cursos'] as $curso => $disciplinas) {
    echo "&emsp;- $curso<br>";
    foreach ($disciplinas as $disciplina => $modulos) {
        echo "&emsp;&emsp;- $disciplina<br>";
        if (!empty($modulos)) {
            foreach ($modulos as $modulo) {
                echo "&emsp;&emsp;&emsp;- $modulo<br>";
            }
        }
    }
}
?>
