<?php
// M.S

require  "../FonctionsTableaux.php";

// Saisie de l'âge de l'enfant
$age = demandeEntier("Quel âge a votre enfant ? ");

// On définit les diférentes catégories
if (($age == 6) || ($age == 7))
{
    echo "Poussin";
}
else if ($age <= 9)
{
    echo "Pupille";
}
else if ($age <= 11)
{
    echo "Minime";
}
else if ($age == 12)
{
    echo "Cadet";
}
else
{
    echo "Autres catégories";
}