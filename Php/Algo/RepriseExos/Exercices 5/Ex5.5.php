<?php
// M.S

// Saisie d'un nombre
$nb = readline("Entrer un nombre : ");

$resultat = 0;
for($i = 0; $i <= $nb; $i++)        // Boucle qui additione jusqu'à nb
{
    $resultat += $i;    
}

// Affichage
echo "Le résultat est ". $resultat;
