<?php
// M.S

// Appel des fonctions
require "../FonctionsTableaux.php";

// Avec creerTableauTermineParZero
$tab = creerTableauTermineParZero();

$positif = 0;
$negatif = 0;

for($i = 0; $i < count($tab); $i++)
{

}


echo afficheTableau($tab);

// Avec creerTableauAvecTaille