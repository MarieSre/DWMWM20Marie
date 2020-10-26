<?php
// M.S

// Appel de la fonction demandeEntier
require "../FonctionsTableaux.php";

// Saisie de l'âge, du nombre d'année de permis et du nombre d'accident
$age = demandeEntier("Quel âge avez-vous ? ");
$permis = demandeEntier("Depuis combien de temps avez-vous le permis ? ");
$accident = demandeEntier("Combien d'accident avez-vous provoqué ? ");
$fidelité = demandeEntier("Depuis combien de temps êtes-vous assuré chez nous ? ");

if($age < 25)
{
    if ($permis < 2)
    {
        if ($accident == 0)
        {
            if($fidélité >= 1)
            {
                echo "Tarif orange";
            }
            else
            {
                echo "Tarif rouge";
            }
        }
        else
        {
            echo "Nous refusons de vous assurer";
        }
    }
    else
    {
        if($accident == 0)
        {
            if($fidelite >= 1)
            {
                echo "Tarif";
            }
        }
    }
}