<?php
// $notes = [10, 20, 10, 9, 'eleve'];
// mettre des clés particulières pour les tableaux
$eleve = [
    'nom' => 'Doe', 
    'prenom' => 'Marc',
    'notes' => [10, 20, 40]
];
echo $eleve['notes'][1];

$eleves['prenom'] = 'Jean';
echo "\n" . $eleve['prenom'] . ' ' . $eleve['nom'] . "\n";

$eleve['notes'][3] = 16;    // si on ne complète pas dans le 2è [], élément rajouté à la fin du tableau par défaut
print_r($eleve['notes']);   // afficher autres valeurs que string et nbre

$eleve[] = 'CM2-A';     // ajoute une valeur au tableau avec une nvelle clé d'index 0
print_r($eleve);

$classe = [
    [
        'nom' => 'Doe',
        'prenom' => 'Jean',
        'notes' => [16, 16, 16]
    ],
    [
        'nom' => 'Doe',
        'prenom' => 'Jane',
        'notes' => [12, 15, 16]
    ]
];
echo $classe[0]['nom'] . "\n";
print_r($classe[1]['notes'][1]);
?>