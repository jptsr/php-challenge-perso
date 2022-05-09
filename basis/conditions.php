<?php

// $note = 12;     // !!! si on met '9' il va voir qu'on a un signe numérique et qu'on fait des opérations math et va interpréter ça cô le chiffre 9 et non cô une chaîne de caractère, pareil si on écrit '9djkns'
// $note = (int)readline('Entrez votre note :');   // sans le int, la réponse est une string, avec le int la réponse est convertie en un entier

// if($note > 10){
//     echo 'Bravo vous avez la moyenne';
// }elseif($note === 10){
//     echo 'Vous avez juste la moyenne';
// }else{
//     echo 'Dommage vous n\'avez pas la moyenne';

// }
// mieux de travailler avc === (le type des variables doit ê identique) que ==, peut mener à des erreurs d'interprétation

// $action = (int)readline('Entrez votre action : (1. attaquer, 2. défendre, 3.passer mon tour)');

// if($action === 1){
//     echo 'J\'attaque !';
// }elseif($action === 2){
//     echo 'Je défends';
// }elseif($action === 3){
//     echo 'Je ne fais rien';
// }else{
//     echo 'Commabde inconnue';
// }

/* switch($action){
    case 1:
        echo 'J\'attaque !';
        break;
    case 2:
        echo 'Je défends';
        break;
    case 3:
        echo 'Je ne fais rien';
        break;
    default:
        echo 'Commabde inconnue';
} */

$heure = (int)readline('Entrez une heure : ');

if((9 <= $heure && $heure <= 12) || (14 <= $heure && $heure <= 17)){    // pour prendre l'inverse de la condition, écrire => !(condition)
    echo 'Le magasin sera ouvert';
}else{
    echo 'Le magasin sera fermé';
}

?>