<?php
// M.S

// Saisi des différents critères de l'assuré

$age = readline("Quel âge avez-vous ? ");
$permis = readline("Depuis combien de temps avez-vous le permis ? ");
$accident = readline("Nombre d'accident : ");
$fidelite = readline("Depuis combien d'année êtes-vous assuré chez nous ? ");

if ($age < 25)  // Si l'assuré a plus de 25ans
{
    if ($permis < 2)    // Si l'assuré a moins de 2ans de permis
    {
        if ($accident == 0) 
        {
            if ($fidelite >= 1)     // Si la personne est assuré depuis plus d'1an, l'assurance lui proposera un tarif plus avantagé
            {
                echo "Tarif orange";
            }
            else 
            {
                echo "Tarif rouge";
            }     
        }
        else    // Si l'assuré a provoqué au moins 1 accident
        {
            echo "Nous refusons de vous assurer";
        }
    }
    else        // Si l'assuré a plus de 2ans de permis
    {
        if ($accident == 0)
        {
            if ($fidelite >= 1)
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
            if ($fidelite >= 1)
            {
                echo "Tarif orange";
            }
            else
            {
                echo "Tarif rouge";
            }
        }
        else // Si l'assuré a provoqué au moins 2 accidents
        {
            echo "Nous refusons de vous assurer";
        }
    }
}
if ($age > 25)     // Si l'assuré a plus de 25ans
{
    if ($permis < 2)    // Si l'assuré a moins de 2ans de permis
    {
        if ($accident == 0)
        {
            if ($fidelite >= 1)
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
            if ($fidelite >= 1)
            {
                echo "Tarif orange";
            }
            else
            {
                echo "Tarif rouge";
            }
        }
        else    // Si l'assuré a provoqué au moins 2 accidents
        {
            echo "Nous refusons de vous assurer";
        }
    }
    else    // Si l'assuré a plus de 2ans de permis
    {
        if ($accident == 0)
        {
            if ($fidelite >= 1)
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
            if ($fidelite >= 1)
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
            if ($fidelite >= 1)
            {
                echo "Tarif orange";
            }
            else 
            {
                echo "Tarif rouge";
            }
        }
        else // Si l'assuré a provoqué au moins 3 accidents
        {
            echo "Nous refusons de vous assurer";
        }
    }
}
    
