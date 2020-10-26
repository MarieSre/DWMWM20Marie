<?php
// M.S

require "../FonctionsTableaux.php";

$n = demandeEntier("Entrer un nombre : ");

$resultat = 0;
for($i = 0; $i <= $n; $i++)
{
    $resultat += $i;
}
echo "Le résultat est ". $resultat."\n";