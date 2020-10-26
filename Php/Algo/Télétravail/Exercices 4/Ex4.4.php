<?php
// M.S

require "../FonctionsTableaux.php";

// Saisie du nombre de photocopies

$copie = demandeEntier("Combien de photocopie(s) avez vous acheté(s) ? ");

$prix = 0;

// On effectue des tests
if ($copie > 10) // Achat de plus de 10 photocopies
{
    $prix = 10 * 0.10;
    $copie -= 10;

    if($copie > 20) // Achat de plus de 20 photocopies
    {
        $prix += (20 * 0.09);
        $copie -= 20;

        if($copie > 0)
        {
            $prix += ($copie * 0.08);   
        }
    }
    else
    {
        $prix += ($copie * 0.09);
    }
}
else    // Achat de moins de 10 photocopies
{
    $prix += $copie * 0.10;
}

// Affichage du prix total

echo "\nLe montant total est de : ". $prix. " euros.\n";