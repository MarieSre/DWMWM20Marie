<?php
// M.S

// Saisi de l'âge de l'enfant
$age = readline("Quel âge a votre enfant ? ");      


// Catégories

switch ($age)
{
    case '6':       // Si l'enfant a entre 6 et 7 ans
    case '7': 
        echo "Il se situe dans la catégorie des Poussins";
    break;

    case '8':       // Si l'enfant a entre 8 et 9 ans
    case '9': 
        echo "Il se situe dans la catégorie des Pupilles";
    break;

    case '10':      // Si l'enfant a entre 10 et 11 ans
    case '11': 
        echo "Il se situe dans la catégorie des Minimes";
    break;

    case '12':      // Si l'enfant a entre 12 et 13 ans
    case '13': 
        echo "Il se situe dans la catégorie des Cadets";
    break;

    default:        // Si l'enfant est trop jeunes ou trop âgé, il se situe dans une autre catégorie
        echo "Autre catégorie";
    break;
}

// Cet exercice est réalisable avec if - else mais le switch est plus optimisé