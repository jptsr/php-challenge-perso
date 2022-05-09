<!--?php
$prenom = 'Marc';
$nom = 'Doe';
echo $prenom . "\n" . $nom . "\n";
echo "$prenom $nom";
?-->

<!--?php
$note = 10;
$note2 = 15;
echo ($note + $note2) / 2;
?-->

<?php
$prenom = 'Marc';
$nom = 'Doe';
$note = 10;
$note2 = 20;
$moyenne = ($note + $note2) / 2;
echo "Bonjour $prenom $nom vous avez eu $moyenne de moyenne";
?>