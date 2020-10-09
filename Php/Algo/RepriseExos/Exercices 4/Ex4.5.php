<?php
// M.S

// Saisie du genre et de l'âge

$genre = ucfirst(readline("Comment vous identifiez vous ? (Homme/Femme) : "));
$age = readline("Quel âge avez-vous ? ");

if (($genre == "Homme") && ($age >= 20))  // Si la personne est un homme de plus de 20ans
{
    echo "Vous êtes imposable";
}
else if (($genre == "Femme") && (($age >= 18) && ($age <= 35))) // Si la personne est une femme a entre 18 et 35ans
{
    echo "Vous êtes imposable";
}
else // Les personnes trop jeunes ou trop âgé sont hors catégorie
{
    echo "Vous n'êtes pas/ plus imposable";
}