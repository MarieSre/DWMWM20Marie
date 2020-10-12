<?php
// M.S

// Saisie de la date

$j = readline("Quel jour ? ");
$m = readline("Quel mois ? ");
$a = readline("Quel année ? ");

if (($j > 0) && ($j <= 31) && ($m > 0) && ($m <= 12)) 
{
    if ($j == 31) 
    {
		if (($m == 4) || ($m == 6) || ($m == 9) || ($m == 11)) // Ces mois n'ont pas 31 jours
		{
			echo $j . " / " . $m . " / " . $a . " est une date invalide";
		}
    } 
    else if (($m == 2) && ($j == 29) && ($a % 400 == 0) || ($a % 4 == 0) && ($a % 100 != 0)) 
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

// 1847 n'est pas une année bissextile
// 1996 est une année bissextile
// 2000 est une année bissextile
// 2003 n'est pas une année bissextile
// 2004 est une année bissextile
// 2019 n'est pas une année bissextile