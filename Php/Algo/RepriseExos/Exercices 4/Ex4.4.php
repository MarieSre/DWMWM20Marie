<?php
// M.S

// Saisie du nombre de photocopies

$copie = readline("Combien de photocpies avez-vous acheté ? ");

if ($copie <= 10) 
{

    if ($copie >= 20) 
    {
		$copie = $copie * 0.09;
    } else if ($copie >= 30) 
    {
		$copie = $copie * 0.08;
	}

	$copie = $copie * 0.10;

}

echo "Le montant total est de : " . $copie . " euros.";