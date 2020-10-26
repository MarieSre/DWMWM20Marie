<?php
// M.S

require "../FonctionsTableaux.php";

$j = demandeEntier("Quel jour ? ");
$m = demandeEntier("Quel mois ? ");
$a = demandeEntier("Quellle année ? ");


if (($j > 0) && ($j <= 31) && ($m > 0) && ($m <= 12)) 
{
    if ($j == 31) 
    {
		if (($m == 4) || ($m == 6) || ($m == 9) || ($m == 11)) // Les mois qui n'ont pas 31 jours
		{
			echo $j . " / " . $m . " / " . $a . " est une date invalide";
		}
    } 
    else if (($m == 2) && ($j == 29) && ($a % 400 == 0) || ($a % 4 == 0) && ($a % 100 != 0)) // Les années divisible par 4 et par 400 sont bissextile
    {
		echo $j . " / " . $m . " / " . $a . " est une année bissextile.";
    } 
    else 
    {
		echo $j . " / " . $m . " / " . $a . " est une date valide";
	}

} 
else 
{
	echo $j . " / " . $m . " / " . $a . " est une date invalide";
}

// Année
// 1983 n'est pas bissextile
// 1996 est bissextile
// 2000 est bissextile
// 2002 n'est pas bissextile
// 2004 est bissextile
// 2019 n'est pas bissextile