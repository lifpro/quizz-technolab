<?php
#Initialisation de l'heure
$heure = date("H");
if ($heure < 12) {
    echo "Bonjour !";
} else if ($heure < 18) {
    echo "Bonsoir !";
} else {
    echo "Bonne nuit !";
}

$age = "Bouba";
echo $age;
if ($age > 30) {
    echo "Vous êtes vieux";
} else {
    echo "Vous êtes jeune";
}
