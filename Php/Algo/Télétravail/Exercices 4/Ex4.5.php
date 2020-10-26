<?php
// M.S

require "../FonctionsTableaux.php";

// Saisie de l'âge et du genre
$age = demandeEntier("Quel âge avez vous ? ");
$genre = ucfirst(readline("Quel est votre genre ? "));
echo "\n";

if (($genre == "Homme") && ($age >= 20))    // Si c'est un homme de plus de 20 ans
{
    echo "Vous êtes imposable.";
}
else if (($genre == "Femme") && ($age >= 18) && ($age <=35))    // Si c'est une femme âgé de 18 à 35 ans
{
    echo "Vous êtes imposable.";
}
else    // Si la personne est trop jeune ou trop âgé
{
    echo "Vous n'êtes pas / plus imposable.";
}