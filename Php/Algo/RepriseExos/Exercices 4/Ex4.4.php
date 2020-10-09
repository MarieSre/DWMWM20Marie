<?php
// M.S

// Saisie du nombre de photocopies

$copie = readline("Combien de photocopie(s) avez-vous acheté(s) ? ");

$prix = 0;

if ($copie > 10) 
{
	$prix = 10 * 0.10;
	$copie = $copie - 10;

	if ($copie > 20) 
	{
		$prix = $prix + (20 * 0.09);
		$copie = $copie - 20;

		if ($copie > 0)
		{
			$prix = $prix + ($copie * 0.08);
		}

	} else {
		$prix = $prix + ($copie * 0.09);
	}

} else 
{
	$prix = $copie * 0.10;
}
// Affichage du prix total

echo "Le montant total est de : " . $prix . " euros.";