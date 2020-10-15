<?php

// M.S

// Appel de la fonction demandeEntier()
require "../FonctionsTableaux.php";

// Saisie de l'âge de l'enfant
$age = demandeEntier("Quel âge a votre enfant : ");

// Définition des catégories
if (($age == 6) || ($age == 7))
{
    echo "Catégorie : Poussin";
}
else if (($age == 8) || ($age == 9))
{
    echo "Catégorie : Pupille";
}
else if (($age == 10) || ($age == 11))
{
    echo "Catégorie : Minime";
}
else if ($age >= 12)
{
    echo "Catégorie : Cadet";
}
else     // Si l'enfant est trop jeune
{
    echo "Autre catégorie";
}
