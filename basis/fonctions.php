<?php

// demonstration($variablle, 'jn');
// echo demonstration($variable, 'jn');
// $var = demonstration($variable, 'jn');

// $var = readline();
// var_dump($var);     // si $var = 123 => string(3) "123"



// $mot = readline('Veuillez entrez un mot :');
// $reverse = strtolower(strrev($mot));
// if(strtolower($mot) === $reverse){
//     echo "Ce mot est un palyndrome";
// }else{
//     echo 'Ce mot n\'est pas un palyndrome';
// }



// $notes = [10, 20, 13];
// $sum = array_sum($notes);
// $count = count($notes);
// var_dump($sum);
// echo "Vous avez " . round(($sum / $count), 2) . " de moyenne";


// !!! LES FCT NE RENVOIENT PAS TOUJOURS LE CHANGEMENT
// $notes = [10, 20, 13];
// array_push($notes, 16, 17);     // ajoute au taleau $notes les entiers 16 et 17
// $notesreversed = array_reverse($notes);
// print_r($notes);
// print_r($notesreversed);
// $notesSorted = sort($notes);
// echo $notesSorted . "\n";  // 1 si vrai et 0 si faux 
// print_r($notes);



// $notes = [10, 20, 13];
// $notes2 = $notes;
// $notes2 = &$notes;  // & signifie que l'on passe une référence, autrement dit notes et $notes 2 font références à la même variablen, dc le changement de l'une affecter aussi l'autre
// $notes[] = 10;
// var_dump($notes2);



// fct mutable = modifie le comportement des variables qui lui sont passées
// fct immutable, ne fait aucune modifications = on lui passe des param, elle fait un traitement et nous renvoie un résultat



// while(true){
//     $mot = readline('Entrez votre mot : ');
//     if($mot === ''){
//         exit('Fin du programme');
//     }
//     $reverse = strtolower(strrev($mot));
//     if(strtolower($mot) === $reverse){
//         echo "Ce mot est un pallyndrome \n";
//     }else{
//         echo "Ce mot n'est pas un palyndrome \n";
//     }
// }



$insultes = ['merde', 'con'];
$phrase = readline('Entrez une phrase : ');

// foreach ($insultes as $insulte) {
//     $replace = str_repeat('*', strlen($insulte));
//     $phrase = str_replace($insulte, $replace, $phrase);
// }

// OR

$asterisque = [];
foreach ($insultes as $insulte) {
    $lettre = substr($insulte, 0, 1);
    $asterisque[] = $lettre.str_repeat('*', (strlen($insulte) - 1));
}
$phrase = str_replace($insultes, $asterisque, $phrase);

echo $phrase;