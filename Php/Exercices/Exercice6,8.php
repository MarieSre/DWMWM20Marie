<?php

//V1

require "FonctionsTableaux.php"; //Appel des fonctions se trouvant dans ce fichier

$tab1 = creerTableauTermineParZero();
$valeurPos = 0;
$valeurNeg = 0;

for ($i = 0; $i < count($tab1); $i++) { //Recherche du nombre de valeur positive et négative
    if ($tab1[$i] < 0) {
        $valeurNeg++;
    } else {
        $valeurPos++;
    }
}
afficheTableau($tab1);
echo "Nombre de valeur négative : " . $valeurNeg . "\n"; //Affiche le nombre de valeur négative situé dans le tableau
echo "Nombre de valeur positive : " . $valeurPos; //Affiche le nombre de valeur positive situé dans le tableau

/* V2 avec le détail des fonctions
function demandeEntier($invite) // Demande un entier à l'utilisateur

{
do {
do {
$nombre = readline($invite);
} while (!is_numeric($nombre)); // on verifie que la chaine de caracterer ne contient que des chiffres
} while (!is_int($nombre * 1)); // on vérifie que le nombre est entier (pas réel)
return $nombre; //renvoi le nombre saisi
}
function creerTableauTermineParZero()
{
do {
$nb = demandeEntier("Entrer une valeur :");
if ($nb != 0) //evite que le dernier 0 entre dans le tableau
{
$tab[] = $nb;
    }
} while ($nb != 0);
return $tab;
}
function afficheTableau($tab)
{
echo "\n";
foreach ($tab as $elt) // le tableau est parcouru de la 1ere à la dernière case, les cases sont mises tour à tour dans $elt
{
echo $elt . "\t";
    }
echo "\n";
}

$tab1 = creerTableauTermineParZero();
$valeurPos = 0;
$valeurNeg = 0;

for ($i = 0; $i < count($tab1); $i++) {  //Recherche du nombre de valeur positive et négative
if ($tab1[$i] < 0) {
$valeurNeg++;
} else {
$valeurPos++;
    }
}
afficheTableau($tab1);
echo "Nombre de valeur négative : " . $valeurNeg . "\n"; //Affiche le nombre de valeur négative situé dans le tableau
echo "Nombre de valeur positive : " . $valeurPos; //Affiche le nombre de valeur positive situé dans le tableau*/
