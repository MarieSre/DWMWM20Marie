<?php
//M.S

require "../FonctionsTableaux.php";

/*Requête pour définir $jour , $mois et $annee.
L'utilisateur est obligé de rentrer un entier*/

$jour= demandeEntier("Quel jour ? "); 
$mois = demandeEntier("Quel mois ? ");  
$annee = demandeEntier("Quelle année ? ");

// Différente conditions pour différencier tous les cas

if (($annee > 0) && ($jour > 0) && ($jour <= 31) && ($mois > 0) && ($mois <= 12))
{
    if (($mois == 4) || ($mois == 6) || ($mois == 9) || ($mois == 11) && ($jour > 31))
    {
        $date = "ko";
    }
    else
    {
    
        if ($mois == 2) // Mois de février
        {
            if ($jour <= 28)
            {
                $date = "ok";
            }
            else
            {
            
                if (($jour == 29) && ($annee %400 == 0) || ( $annee % 4 == 0) && ($annee %100 != 0))
                {
                    $date = "ok";
                }
                else 
                {
                    $date = "ko";
                }
            
            }
        }
    else
    {
        $date = "ok";
    }
}
    
}
else 
{
    $date = "ko";
}

// Affichage du résultat

if ($date == "ok")
{
        echo "Le " . $jour . " / " . $mois . " / " . $annee . " est une date valide.";
} else
{
        echo "Le"  . $jour ." / " . $mois . " / " . $annee . " n'est pas une date valide.";
}