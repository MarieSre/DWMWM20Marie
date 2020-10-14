<?php
//M.S

$copie = readline("Nombre de photocopies :"); // Saisi du nombre de photocopie(s)

$prix = 0;

if ($copie > 10) // S'il y a plus d'une dixaine photocopies
{

    $prix = 10 * 0.10;
    $copie = $copie - 10;

    if ($copie > 20)  // S'il y a plus d'une vingtaine photocopies
    {
        $prix = $prix + (20 * 0.09);
        $copie = $copie - 20;

        if ($copie > 0) 
        {
            $prix = $prix + ($copie * 0.08); // S'il y a plus d'une trentaine de photocopies
        }
    } 
    else 
    {

        $prix = $prix + ($copie * 0.09); 
    }

} else {
    $prix = $copie * 0.10;

}
echo "Le prix à payer est de : ". $prix;  // Affichage du prix total
