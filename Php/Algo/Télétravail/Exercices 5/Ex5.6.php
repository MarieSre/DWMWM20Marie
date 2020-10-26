<?php
// M.S

require "../FonctionsTableaux.php";

$n = demandeEntier("Entrer un nombre : ");

$facto = 0;


echo "1";
// On calcul la factorielle de n
for($i = 2; $i <= $n; $i++)
{
    $facto = $n * $i;
    echo " x ". $i;
}
// Affichage
echo " = ". $facto;