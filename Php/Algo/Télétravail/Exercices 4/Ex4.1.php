<?php
// M.S

// Saisie des valeurs de Tutu, Toto et Tata
$tutu = readline("Entrer la valeur de Tutu : ");
$toto = readline("Entrer la valeur de Toto : ");
$tata = strtoupper(readline("Entrer la valeur de Tata : "));


if (($tutu > $toto + 4) || ($tata == "OK"))
{
    $tutu = $tutu+1;
}
else
{
    $tutu = $tutu-1;
}

echo $tutu;