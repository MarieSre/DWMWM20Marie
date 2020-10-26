<?php
// M.S

// Appel de la fonction demandeEntier
require "../FonctionsTableaux.php";

// Saisie de l'âge, du nombre d'année de permis et du nombre d'accident
$age = demandeEntier("Quel âge avez-vous ? ");
$permis = demandeEntier("Depuis combien de temps avez-vous le permis ? ");
$accident = demandeEntier("Nombre d'accident : ");
$fidelite = demandeEntier("Depuis combien de d'année(s) êtes-vous assuré chez nous ? ");

// On test si l'assuré à plus de 25 ans
if(($age < 25) && ($age >= 18))
{
    if ($permis < 2)    // S'il a moins de 2 ans de permis
    {
        if ($accident == 0)
        {
            if($fidelite >= 1)  // S'il est assuré depuis au moins 1 an
            {
                echo "Tarif orange";
            }
            else
            {
                echo "Tarif rouge";
            }
        }
        else    // S'il a provoqué au moins 1 accident
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
                echo "Tarif vert";
            }
            else
            {
                echo "Tarif orange";
            }
        }
        else if ($accident == 1)
        {
            if($fidelite >= 1)
            {
                echo "Tarif orange";
            }
            else
            {
                echo "Tarif rouge";
            }
        }
        else    // S'il a provoqué au moins 2 accidents
        {
            echo "Nous refusons de vous assurer";
        }
    }
}
// On test si l'assuré à plus de 25 ans
if($age >= 25)
{
    if($permis < 2) // S'il a moins de 2ans de permis
    {
        if($accident == 0)
        {
            if($fidelite >= 1)
            {
                echo "Tarif vert";
            }
            else
            {
                echo "Tarif orange";
            }
        }
        else if ($accident == 1)
        {
            if($fidelite >= 1)
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
            echo "Nous refusons de vous assurer"; // S'il a provoqué au moins 2 accidents
        }
    }
    else    // S'il a le permis depuis plus de 2 ans
    {
        if($accident == 0)
        {
            if($fidelite >= 1)
            {
                echo "Tarif bleu";
            }
            else
            {
                echo "Tarif vert";
            }
        }
        else if ($accident == 1)
        {
            if($fidelite >= 1)
            {
                echo "Tarif vert";
            }
            else
            {
                echo "Tarif orange";
            }
        }
        else if ($accident == 2)
        {
            if($fidelite >= 1)
            {
                echo "Tarif orange";
            }
            else
            {
                echo "Tarif rouge";
            }
        }
        else    // Si l'assuré a provoqué plus de 3 accidents
        {
            echo "Nous refusons de vous assurer";
        }
    }
}