<?php
//M.S

$jour= readline("Quel jour ? ");
$mois = readline("Quel mois ? ");
$annee = readline("Quelle année ? ");


if (($jour < 0) || ($jour > 31) || ($mois < 1) ($mois > 12))
{
    echo "Saisie incorrect, veuillez recommencer";

    if ($annee % 4 == 0)
    {
        if ($annee % 100 == 0)
        {
            if ($annee % 400 == 0)
            {
                echo "Année bissextile";
            }
        }
    }
} else 
{
    echo "Année non-bissextile";
}







/*if (($jour < 0) || ($jour > 31) || ($mois < 1) ($mois > 31))
{
    echo "Saisie incorrect, veuillez recommencer";

     if (($mois == 2) || ($mois == 4) || ($mois == 6) || ($mois == 11))
    {
        echo "Saisi incorrect";
    }
}*/