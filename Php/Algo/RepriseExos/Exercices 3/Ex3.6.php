<?php

// M.S

// Saisi de l'âge de l'enfant

$age = readline ("Quel âge a votre enfant ? ");     

// Catégories
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
else
{
    echo "Autre catégorie";
}