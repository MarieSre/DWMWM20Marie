<?php
//M.S

$age = readline("Quel âge avez-vous ? :"); // Saisi de l'âge
$genre = readline("Quel est votre genre (homme/femme) ? :"); // Saisi du genre

if (($genre == "homme" && $age == 20) || ($genre == "femme" && $age > 18 && $age < 35)) // On vérifie si la personne est imposable selon ces critères
{
    echo "Vous êtes imposable"; // Si iel rentre dans les critères, iel est imposable
} else {
    echo "Vous n'êtes pas imposable"; // Le reste n'est pas ou plus imposable
}