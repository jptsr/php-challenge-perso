<?php

// declare(strict_types=1);    // empêche tte conversion implicite

// $nom = "Doe";

// function bonjour($prenom = null){
//     // global $nom;    // déconseillé
//     if($prenom === null){
//         return "Bonjour \n";
//     }
//     return 'Bonjour ' . $prenom . " " . $nom . "\n";
// }

// $salutation = bonjour('Jean');
// echo $salutation;
// echo bonjour('Jean');   // return Bonjour Jean et Bonjour Jean Doe si global



function rep_oui_non($phrase){
    while(true){
        $rep = readline($phrase . "(o)ui/(n)on : ");
        if($rep === 'o'){
            return true;
        }elseif($rep === 'n'){
            return false;
        }
    }
    
}

// $resultat = rep_oui_non('voulez vous continuer ?');

function demander_creneau($phrase = 'Veuillez entrer un creneau'){
    echo $phrase . "\n";

    while(true){
        $ouverture = (int)readline('Heure d\'ouverture : ');

        if($ouverture >= 0 || $ouverture <= 23){
            break;
        }
    }
    
    while(true){
        $fermeture = (int)readline('Heure de fermeture : ');

        if($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture){
            break;
        }
    }

    return [$ouverture, $fermeture];
}

// $creneau = demander_creneau();
// $creneau2 = demander_creneau('Veuillez entrer votre creneau ');

// var_dump($creneau, $creneau2);

function demander_creneaux(string $phrase = "Veuillez entrez vos créneaux"): array {    // string devant param $phrase permet de typer la variable en une string (si ? dvt, le param peut être une string ou null, pareil pour :array) et : array dit que la fonction renvoie un tableau (return est typé)
    $creneaux = [];
    $continuer = true;
    while($continuer){
        $creneaux[] = demander_creneau();
        $continuer = rep_oui_non("Voulez vous continuer ? ");
    }
    return $creneaux;
}

// $creneaux = demander_creneaux('Entrez vos créneaux');
// var_dump($creneaux);

function demo(string $param){
    var_dump($param);
}

// demo(1.2);