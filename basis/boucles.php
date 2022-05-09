<?php

// $chiffre = null;

// while($chiffre !== 10){
//     $chiffre = (int)readline('Entrez une heure : ');
//     // break;    
// }

// echo 'Bravo vous avez gagné !';



// for($i = 0; $i < 10; $i++){
//     echo "- $i \n";
//     // print_r("- $i \n");
// }



// $notes = [10, 15, 16];

// for($i = 0; $i < 3; $i++){
//     echo '- ' . $notes[$i] . "\n";
// } 

// foreach ($notes as $note) {
//     echo '- ' . $note . "\n";
// }



// $eleves = [
//     'cm2' => 'Jean',
//     'cm1' => 'Marc'
// ];

// foreach ($eleves as $eleve) {
//     echo "- $eleve \n";
// }

// récupérer la clé/index ($class = clé/index)
// foreach ($eleves as $class => $eleve) {
//     echo "- $class : $eleve \n";
// }

// $eleves = [
//     'cm2' => ['Jean', 'Marc', 'Jane', 'Marion'],
//     'cm1' => ['Emilie', 'Marcelin']
// ];

// foreach ($eleves as $class => $listEleves) {
//     echo "La classe $class : \n";
//     foreach ($listEleves as $eleve) {
//         echo "- $eleve \n";
//     }
//     echo "\n";
// }



// $ask = readline('Entrez une note :');
// $notes = [];

// while($ask){
//     if($ask == 'fin'){
//         // print_r($notes);
//         echo "Les notes sont : \n";
//         foreach ($notes as $note) {
//             echo "- $note \n";
//         }
//         break;
//     }else{
//         $notes[] = $ask;
//         $ask = readline('Entrez une note :');
//     }    
// }

// OR

// $action = null;
// $notes = [];

// while($action !== 'fin'){
//     $action = readline('Entrer une nvelle note ou \'fin\' pour terminer la saisie:');
//     if($action !== 'fin'){
//         $notes[] = (int)$action;
//     }
// }

// foreach ($notes as $note) {
//     echo "- $note \n";
// }



// $open = (int)readline('Entrez l\'heure d\'ouverture du magagsin :');
// $close = (int)readline('Entrez l\'heure de fermeture du magasin :');

// while($close < $open){
//     $close = readline('L\'heure de fermeture est incorrecter, rentrez en une nvelle :');
// }

// $heure = (int)readline('Entrez une heure :');

// if($open <= $heure && $heure < $close){
//     echo "le magasin est ouvert";
// }else{
//     echo "Le magasin est fermé";
// }


$creneaux = [];

while(true){
    $debut = (int)readline('Heure d\'ouverture du créneaux : ');
    $fin = (int)readline('Heure de fermeture :');

    if($debut >= $fin){
        echo "Le créneau ne peut pas être enregistré car l'heure d'ouverture ($debut) est supérieure à l'heure de fermeture ($fin)";
    }else{
        $creneaux[] = [$debut, $fin];
        $action = readline('Voulez-vous enregistrer un nv créneau ? (n)');
        if($action === 'n'){
            break;
        }
    }
}

// Le magasin est ouvert 9h à 12h et de 14h à 18h
echo 'Le magasin est ouvert de';
foreach ($creneaux as $k => $creneau) {
    // echo $creneau[0] . 'h à ' . $creneau[1]. 'h';
    if($k > 0){
        echo ' et de';
    }
    echo " {$creneau[0]}h à {$creneau[1]}h";
}

// $heure = (int)readline('A quelle heure voulez-vous visiter le magasin ?');

// $creneauTrouve = false;

// foreach ($creneaux as $creneau) {
//     if($heure >= $creneau[0] && $heure <= $creneau[1]){
//         $creneauTrouve = true;
//         break;
//     }
// }

// if($creneauTrouve){
//     echo "Le magasin sera ouvert";
// }else{
//     echo "Le magasin sera fermé";
// }