<?php

$estudantes = [
    [
        'Nome' => 'Paula Souza',
        'RM' => '1123',
        'E-mail' => 'paula.souza@email.com',
        'Notas' => [7.5, 8.0, 10.0]
    ],
    [
        'Nome' => 'Carla Costa',
        'RM' => '1940',
        'E-mail' => 'carlacosta@emai.com',
        'Notas' => [5.5, 5.0, 5.5]
    ],
    [
        'Nome' => 'Fernando Rocha',
        'RM' => '2513',
        'E-mail' => 'fernando.rocha@email.com',
        'Notas' => [7.0, 8.5, 6.0]
    ],
    [
        'Nome' => 'Pedro Silva',
        'RM' => '1004',
        'E-mail' => 'pedro@email.com',
        'Notas' => [5.0, 4.0, 3.5]
    ]
];

// Função para calcular a média
function media($notas) {
    return array_sum($notas) / count($notas);
}

// Exibição
echo "\nLista dos estudantes:\n\n";

foreach ($estudantes as $estudante) {
    $mediaFinal = media($estudante['Notas']);
    $situacao = ($mediaFinal >= 6.0) ? 'Aprovado' : 'Reprovado';

    echo "Nome: {$estudante['Nome']}\n";
    echo "RM: {$estudante['RM']}\n";
    echo "E-mail: {$estudante['E-mail']}\n";
    echo "Notas:\n";
    echo " Português: {$estudante['Notas'][0]}\n";
    echo "  Matemática: {$estudante['Notas'][1]}\n";
    echo "  Ciencias: {$estudante['Notas'][2]}\n";
    echo "Média: " . number_format($mediaFinal, 2) . "\n";
    echo "Situação: $situacao\n";
    echo "----------------------------\n";
}
